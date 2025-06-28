<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'route_name',
        'route_params',
        'target',
        'css_class',
        'icon_class',
        'parent_id',
        'sort_order',
        'is_active',
        'type',
        'location'
    ];

    protected $casts = [
        'route_params' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get the parent menu item.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    /**
     * Get the child menu items.
     */
    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('sort_order');
    }

    /**
     * Get active child menu items.
     */
    public function activeChildren(): HasMany
    {
        return $this->children()->where('is_active', true);
    }

    /**
     * Scope to get only active menus.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to get menus by location.
     */
    public function scopeByLocation($query, $location = 'main')
    {
        return $query->where('location', $location);
    }

    /**
     * Scope to get parent menus only.
     */
    public function scopeParents($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * Get the full URL for the menu item.
     */
    public function getFullUrlAttribute()
    {
        if ($this->url) {
            return $this->url;
        }

        if ($this->route_name) {
            try {
                return $this->route_params 
                    ? route($this->route_name, $this->route_params)
                    : route($this->route_name);
            } catch (\Exception $e) {
                return '#';
            }
        }

        return '#';
    }

    /**
     * Check if menu item has children.
     */
    public function hasChildren()
    {
        return $this->children()->exists();
    }

    /**
     * Check if menu item has active children.
     */
    public function hasActiveChildren()
    {
        return $this->activeChildren()->exists();
    }

    /**
     * Get menu tree structure.
     */
    public static function getMenuTree($location = 'main')
    {
        return self::active()
            ->byLocation($location)
            ->parents()
            ->with(['activeChildren' => function ($query) {
                $query->orderBy('sort_order');
            }])
            ->orderBy('sort_order')
            ->get();
    }
}