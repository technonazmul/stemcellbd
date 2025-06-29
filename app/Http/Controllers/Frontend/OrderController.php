<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ShippingSetting;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = Session::get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty');
        }

        $subtotal = 0;
        foreach ($cart as $details) {
            $subtotal += $details['price'] * $details['quantity'];
        }

        return view('frontend.pages.checkout', compact('cart', 'subtotal'));
    }

    public function placeOrder(Request $request)
    {
         $request->validate([
        'customer_name' => 'required|string|max:255',
        'customer_phone' => 'required|string|max:20',
        'address' => 'required|string',
        ]);

        $cart = session()->get('cart', []);
        if (count($cart) == 0) {
            return redirect()->route('cart')->with('error', 'Cart is empty.');
        }

        $shippingSettings = ShippingSetting::first();
        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        // Discount
        $discount = 0;
        // if ($shippingSettings->enable_discount_offer && $subtotal >= $shippingSettings->discount_minimum_total) {
        //     $discount = ($shippingSettings->discount_percent / 100) * $subtotal;
        // }

        // Shipping
        $shippingCost = $request->shipping_cost ?? $shippingSettings->inside_dhaka_cost;

        // if ($shippingSettings->enable_free_shipping && $subtotal >= $shippingSettings->free_shipping_threshold) {
        //     $shippingCost = 0;
        // }

        // Final total
        $totalAmount = $subtotal - $discount + $shippingCost;

        // Create order
        $order = Order::create([
            'order_number' => 'ORD-' . strtoupper(Str::random(10)),
            'user_id' => auth()->check() ? auth()->id() : null,
            'customer_name' => $request->customer_name,
            'customer_email' => 'test@example.com',
            'customer_phone' => $request->customer_phone,
            'shipping_address' => $request->address,
            'shipping_city' => '', // optional
            'shipping_area' => '', // optional
            'subtotal' => $subtotal,
            'shipping_cost' => $shippingCost,
            'total_amount' => $totalAmount,
            'payment_status' => 'pending',
            'status' => 'pending',
            'payment_method' => 'cash_on_delivery', // or $request->payment_method
            'notes' => $request->message,
        ]);

        // Save order items
        foreach ($cart as $id => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'product_name' => $item['name'],
                'product_image' => $item['image'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'total' => $item['price'] * $item['quantity'],
            ]);
        }

        // Clear cart
        session()->forget('cart');



        return redirect()->route('thankyou', $order->id)
                 ->with('success', 'Order placed successfully!');

    }

    public function success($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->with('orderItems')->firstOrFail();
        return view('frontend.order-success', compact('order'));
    }

    public function track(Request $request)
    {
        if ($request->has('order_number')) {
            $order = Order::where('order_number', $request->order_number)
                         ->with('orderItems')
                         ->first();
            
            if (!$order) {
                return back()->with('error', 'Order not found');
            }
            
            return view('frontend.order-track', compact('order'));
        }
        
        return view('frontend.order-track');
    }

    public function myOrders()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $orders = Order::where('user_id', auth()->id())
                      ->with('orderItems')
                      ->orderBy('created_at', 'desc')
                      ->paginate(10);

        return view('frontend.my-orders', compact('orders'));
    }

    // Admin methods
    public function adminIndex()
    {
        $orders = Order::with(['orderItems', 'user'])
                      ->orderBy('created_at', 'desc')
                      ->paginate(20);

        $stats = [
            'total_orders' => Order::count(),
            'pending_orders' => Order::where('status', 'pending')->count(),
            'completed_orders' => Order::where('status', 'delivered')->count(),
            'total_revenue' => Order::where('status', 'delivered')->sum('total_amount')
        ];

        return view('backend.orders.index', compact('orders', 'stats'));
    }

    public function adminShow(Order $order)
    {
        $order->load(['orderItems', 'user']);
        return view('backend.orders.show', compact('order'));
    }

    public function adminUpdate(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,processing,shipped,delivered,cancelled',
            'payment_status' => 'required|in:pending,paid,failed,refunded',
            'notes' => 'nullable|string'
        ]);

        $order->update($request->only(['status', 'payment_status', 'notes']));

        // Update timestamps based on status
        if ($request->status === 'shipped' && !$order->shipped_at) {
            $order->update(['shipped_at' => now()]);
        } elseif ($request->status === 'delivered' && !$order->delivered_at) {
            $order->update(['delivered_at' => now()]);
        }

        return back()->with('success', 'Order updated successfully');
    }

    private function sendOrderConfirmation($order)
    {
        // Implement email sending logic here
        // Mail::to($order->customer_email)->send(new OrderConfirmation($order));
    }
}
