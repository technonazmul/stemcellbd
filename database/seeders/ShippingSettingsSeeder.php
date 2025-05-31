<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShippingSetting;

class ShippingSettingsSeeder extends Seeder
{
    public function run()
    {
        ShippingSetting::create([
            'default_shipping_cost' => 10.00,
            'free_shipping_threshold' => 100.00,
            'enable_free_shipping' => true
        ]);
    }
}
