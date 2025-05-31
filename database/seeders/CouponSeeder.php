<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;
use Carbon\Carbon;

class CouponSeeder extends Seeder
{
    public function run()
    {
        $coupons = [
            [
                'code' => 'WELCOME10',
                'name' => 'Welcome Discount',
                'type' => 'percentage',
                'value' => 10.00,
                'minimum_amount' => 50.00,
                'usage_limit' => 100,
                'expires_at' => Carbon::now()->addMonths(6),
                'is_active' => true
            ],
            [
                'code' => 'FREESHIP',
                'name' => 'Free Shipping',
                'type' => 'free_shipping',
                'value' => null,
                'minimum_amount' => 25.00,
                'usage_limit' => null,
                'expires_at' => Carbon::now()->addYear(),
                'is_active' => true
            ],
            [
                'code' => 'SAVE20',
                'name' => '$20 Off',
                'type' => 'fixed',
                'value' => 20.00,
                'minimum_amount' => 100.00,
                'usage_limit' => 50,
                'expires_at' => Carbon::now()->addMonths(3),
                'is_active' => true
            ]
        ];

        foreach ($coupons as $coupon) {
            Coupon::create($coupon);
        }
    }
}