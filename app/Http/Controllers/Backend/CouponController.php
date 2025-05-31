<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Models\ShippingSetting;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('backend.coupons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:50|unique:coupons',
            'name' => 'required|string|max:255',
            'type' => 'required|in:percentage,fixed,free_shipping',
            'value' => 'required_unless:type,free_shipping|numeric|min:0',
            'minimum_amount' => 'nullable|numeric|min:0',
            'usage_limit' => 'nullable|integer|min:1',
            'starts_at' => 'nullable|date',
            'expires_at' => 'nullable|date|after:starts_at',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['code'] = strtoupper($data['code']);
        $data['is_active'] = $request->has('is_active');

        Coupon::create($data);

        return redirect()->route('backend.coupons.index')
            ->with('success', 'Coupon created successfully!');
    }

    public function show(Coupon $coupon)
    {
        return view('backend.coupons.show', compact('coupon'));
    }

    public function edit(Coupon $coupon)
    {
        return view('backend.coupons.edit', compact('coupon'));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'code' => 'required|string|max:50|unique:coupons,code,' . $coupon->id,
            'name' => 'required|string|max:255',
            'type' => 'required|in:percentage,fixed,free_shipping',
            'value' => 'required_unless:type,free_shipping|numeric|min:0',
            'minimum_amount' => 'nullable|numeric|min:0',
            'usage_limit' => 'nullable|integer|min:1',
            'starts_at' => 'nullable|date',
            'expires_at' => 'nullable|date|after:starts_at',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['code'] = strtoupper($data['code']);
        $data['is_active'] = $request->has('is_active');

        $coupon->update($data);

        return redirect()->route('backend.coupons.index')
            ->with('success', 'Coupon updated successfully!');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        
        return redirect()->route('backend.coupons.index')
            ->with('success', 'Coupon deleted successfully!');
    }

    // API method to validate coupon
    public function validateCoupon(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'order_total' => 'required|numeric|min:0'
        ]);

        $coupon = Coupon::where('code', strtoupper($request->code))->first();

        if (!$coupon) {
            return response()->json(['error' => 'Invalid coupon code'], 404);
        }

        if (!$coupon->isValid($request->order_total)) {
            return response()->json(['error' => 'Coupon is not valid'], 400);
        }

        $shippingSettings = ShippingSetting::getSettings();
        $shippingCost = $shippingSettings->calculateShipping($request->order_total);
        $discount = $coupon->calculateDiscount($request->order_total, $shippingCost);

        return response()->json([
            'coupon' => $coupon,
            'discount' => $discount,
            'shipping_cost' => $shippingCost,
            'final_shipping' => $coupon->type === 'free_shipping' ? 0 : $shippingCost
        ]);
    }
}

