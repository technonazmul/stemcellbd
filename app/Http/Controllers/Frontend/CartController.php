<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Show cart items
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('frontend.pages.cart', compact('cart'));
    }

    // Add to cart
   public function add(Request $request)
{
    try {
        // Validate the request
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1|max:100'
        ]);
        
        $productId = $request->product_id;
        $quantity = $request->quantity ?? 1;

        $product = Product::findOrFail($productId);

        $cart = session()->get('cart', []);

        // If product exists in cart, increase quantity
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Get the first image from the images string
            $images = explode(',', $product->images);
            $firstImage = !empty($images) ? $images[0] : null;
            
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->offer_price ?? $product->price, // Use offer price if available
                "original_price" => $product->price,
                "image" => $firstImage,
                "slug" => $product->slug,
            ];
        }

        session()->put('cart', $cart);

        // Calculate cart totals
        $cartCount = array_sum(array_column($cart, 'quantity'));
        $cartTotal = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        // Check if request is AJAX
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Product added to cart successfully!',
                'cart_count' => $cartCount,
                'cart_total' => number_format($cartTotal, 2),
                'product_name' => $product->name,
                'quantity_added' => $quantity,
                'cart_items' => $cart // Optional: return full cart data
            ]);
        }

        // For non-AJAX requests, redirect back with success message
        return redirect()->back()->with('success', 'Product added to cart!');
        
    } catch (\Illuminate\Validation\ValidationException $e) {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
        
        return redirect()->back()->withErrors($e->errors())->withInput();
        
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }
        
        return redirect()->back()->with('error', 'Product not found');
        
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Cart add error: ' . $e->getMessage());
        
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while adding product to cart. Please try again.'
            ], 500);
        }
        
        return redirect()->back()->with('error', 'An error occurred while adding product to cart. Please try again.');
    }
}

    // Remove from cart
    public function remove(Request $request)
    {
        $productId = $request->product_id;
        $cart = session()->get('cart', []);

        if(isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }
    // Update cart item quantity
public function update(Request $request)
{
    $request->validate([
        'product_id' => 'required|integer',
        'quantity' => 'required|integer|min:1'
    ]);

    $productId = $request->product_id;
    $quantity = $request->quantity;

    $cart = session()->get('cart', []);

    if(isset($cart[$productId])) {
        $cart[$productId]['quantity'] = $quantity;
        session()->put('cart', $cart);
        
        $itemTotal = $cart[$productId]['price'] * $quantity;
        
        return response()->json([
            'success' => true,
            'message' => 'Cart updated successfully',
            'item_total' => $itemTotal,
            'cart_count' => count($cart)
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Item not found in cart'
    ], 404);
}

// Remove from cart (AJAX version)
public function destroy(Request $request)
{
    $request->validate([
        'product_id' => 'required|integer'
    ]);

    $productId = $request->product_id;
    $cart = session()->get('cart', []);

    if(isset($cart[$productId])) {
        unset($cart[$productId]);
        session()->put('cart', $cart);
        
        return response()->json([
            'success' => true,
            'message' => 'Product removed from cart',
            'cart_count' => count($cart)
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Item not found in cart'
    ], 404);
}

// Apply coupon code
public function applyCoupon(Request $request)
{
    $request->validate([
        'coupon_code' => 'required|string'
    ]);

    $couponCode = $request->coupon_code;
    
    // Add your coupon validation logic here
    // For example, check against a coupons table
    
    // Sample coupon logic
    $validCoupons = [
        'SAVE10' => 10, // 10% discount
        'SAVE20' => 20, // 20% discount
        'WELCOME' => 5  // $5 discount
    ];
    
    if (array_key_exists($couponCode, $validCoupons)) {
        session()->put('coupon', [
            'code' => $couponCode,
            'discount' => $validCoupons[$couponCode]
        ]);
        
        return redirect()->back()->with('success', 'Coupon applied successfully!');
    }
    
    return redirect()->back()->with('error', 'Invalid coupon code!');
    }

    // Get cart count for navbar/header
    public function getCartCount()
    {
        $cart = session()->get('cart', []);
        return response()->json(['count' => count($cart)]);
    }

    // Get cart total
    public function getCartTotal()
    {
        $cart = session()->get('cart', []);
        $total = 0;
        
        foreach($cart as $details) {
            $total += $details['price'] * $details['quantity'];
        }
        
        return response()->json(['total' => $total]);
}
}
