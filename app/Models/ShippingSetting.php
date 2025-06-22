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
    'enable_free_shipping',
    'enable_discount_offer',
    'discount_percent',
    'discount_minimum_total',
    'inside_dhaka_cost',
    'outside_dhaka_cost',
    ];

    protected $casts = [
        'default_shipping_cost' => 'decimal:2',
        'free_shipping_threshold' => 'decimal:2',
        'enable_free_shipping' => 'boolean',
        'enable_discount_offer' => 'boolean',
        'discount_percent' => 'decimal:2',
        'discount_minimum_total' => 'decimal:2',
        'inside_dhaka_cost' => 'decimal:2',
        'outside_dhaka_cost' => 'decimal:2',
    ];



    public static function getSettings()
    {
        return self::first() ?? self::create([
            'default_shipping_cost' => 10.00,
            'free_shipping_threshold' => 100.00,
            'enable_free_shipping' => true,
            'enable_discount_offer' => false,
            'discount_percent' => 15.00,
            'discount_minimum_total' => 1000.00,
            'inside_dhaka_cost' => 80.00,
            'outside_dhaka_cost' => 120.00,
        ]);
    }



    public function calculateShipping($orderTotal)
    {
        if ($this->enable_free_shipping && $orderTotal >= $this->free_shipping_threshold) {
            return 0;
        }
        return $this->default_shipping_cost;
    }

    public function calculateDiscount($orderTotal)
    {
        if ($this->enable_discount_offer && $orderTotal >= $this->discount_minimum_total) {
            return round($orderTotal * ($this->discount_percent / 100), 2);
        }

        return 0;
    }

    public function calculateShippingByArea($orderTotal, $isInsideDhaka)
    {
        if ($this->enable_free_shipping && $orderTotal >= $this->free_shipping_threshold) {
            return 0;
        }

        return $isInsideDhaka ? $this->inside_dhaka_cost : $this->outside_dhaka_cost;
    }
}