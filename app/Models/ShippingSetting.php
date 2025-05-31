<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'default_shipping_cost',
        'free_shipping_threshold',
        'enable_free_shipping'
    ];

    protected $casts = [
        'default_shipping_cost' => 'decimal:2',
        'free_shipping_threshold' => 'decimal:2',
        'enable_free_shipping' => 'boolean'
    ];

    public static function getSettings()
    {
        return self::first() ?? self::create([
            'default_shipping_cost' => 10.00,
            'free_shipping_threshold' => 100.00,
            'enable_free_shipping' => true
        ]);
    }

    public function calculateShipping($orderTotal)
    {
        if ($this->enable_free_shipping && $orderTotal >= $this->free_shipping_threshold) {
            return 0;
        }
        return $this->default_shipping_cost;
    }
}