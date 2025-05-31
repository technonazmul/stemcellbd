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
        $request->validate([
            'default_shipping_cost' => 'required|numeric|min:0',
            'free_shipping_threshold' => 'required|numeric|min:0',
            'enable_free_shipping' => 'boolean'
        ]);

        $settings = ShippingSetting::getSettings();
        $settings->update([
            'default_shipping_cost' => $request->default_shipping_cost,
            'free_shipping_threshold' => $request->free_shipping_threshold,
            'enable_free_shipping' => $request->has('enable_free_shipping')
        ]);

        return redirect()->back()
            ->with('success', 'Shipping settings updated successfully!');
    }
}
