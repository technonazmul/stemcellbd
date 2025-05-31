<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'type',
        'value',
        'minimum_amount',
        'usage_limit',
        'used_count',
        'starts_at',
        'expires_at',
        'is_active'
    ];

    protected $casts = [
        'value' => 'decimal:2',
        'minimum_amount' => 'decimal:2',
        'starts_at' => 'datetime',
        'expires_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    public function isValid($orderTotal = 0)
    {
        if (!$this->is_active) return false;
        if ($this->starts_at && Carbon::now()->lt($this->starts_at)) return false;
        if ($this->expires_at && Carbon::now()->gt($this->expires_at)) return false;
        if ($this->usage_limit && $this->used_count >= $this->usage_limit) return false;
        if ($orderTotal < $this->minimum_amount) return false;
        
        return true;
    }

    public function calculateDiscount($orderTotal, $shippingCost = 0)
    {
        if (!$this->isValid($orderTotal)) return 0;

        switch ($this->type) {
            case 'percentage':
                return ($orderTotal * $this->value) / 100;
            case 'fixed':
                return min($this->value, $orderTotal);
            case 'free_shipping':
                return $shippingCost;
        }

        return 0;
    }

    public function incrementUsage()
    {
        $this->increment('used_count');
    }
}

