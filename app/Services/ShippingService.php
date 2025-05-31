<?php
namespace App\Services;

use App\Models\ShippingSetting;
use App\Models\Coupon;

class ShippingService
{
    protected $shippingSettings;

    public function __construct()
    {
        $this->shippingSettings = ShippingSetting::getSettings();
    }

    public function calculateTotal($orderTotal, $couponCode = null)
    {
        $shippingCost = $this->shippingSettings->calculateShipping($orderTotal);
        $discount = 0;
        $coupon = null;

        if ($couponCode) {
            $coupon = Coupon::where('code', strtoupper($couponCode))->first();
            if ($coupon && $coupon->isValid($orderTotal)) {
                $discount = $coupon->calculateDiscount($orderTotal, $shippingCost);
                
                if ($coupon->type === 'free_shipping') {
                    $shippingCost = 0;
                }
            }
        }

        return [
            'subtotal' => $orderTotal,
            'discount' => $discount,
            'shipping_cost' => $shippingCost,
            'total' => $orderTotal - $discount + $shippingCost,
            'coupon' => $coupon,
            'free_shipping_threshold' => $this->shippingSettings->free_shipping_threshold,
            'free_shipping_enabled' => $this->shippingSettings->enable_free_shipping
        ];
    }

    public function applyCoupon($couponCode)
    {
        $coupon = Coupon::where('code', strtoupper($couponCode))->first();
        
        if ($coupon) {
            $coupon->incrementUsage();
        }

        return $coupon;
    }
}
