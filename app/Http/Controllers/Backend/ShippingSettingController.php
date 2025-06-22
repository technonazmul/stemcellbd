<?php

namespace App\Http\Controllers\Backend;

use App\Models\ShippingSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShippingSettingController extends Controller
{
    public function index()
    {
        $settings = ShippingSetting::getSettings();
        return view('backend.shipping.index', compact('settings'));
    }

    public function update(Request $request)
    {
    
        $settings = ShippingSetting::getSettings();

        $settings->update([
            'default_shipping_cost'      => $request->default_shipping_cost,
            'free_shipping_threshold'    => $request->free_shipping_threshold,
            'enable_free_shipping'       => $request->has('enable_free_shipping'),

            'inside_dhaka_cost' => $request->inside_dhaka_cost,
            'outside_dhaka_cost' => $request->outside_dhaka_cost,

            // New: Discount offer settings
            'enable_discount_offer'      => $request->has('enable_discount_offer'),
            'discount_percent'           => $request->discount_percent,
            'discount_minimum_total'     => $request->discount_minimum_total,
        ]);

        return redirect()->back()->with('success', 'Shipping & offer settings updated successfully!');
    }

}
