<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Products;
use App\Models\OrderCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function show()
    {
        return view('shopping-cart');
    }
    public function add($id)
    {
        $product = Products::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "product_name" => $product->product_name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('message', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('message', 'Product successfully removed!');
        }
    }
    public function checkout()
    {
        $cart = session()->get('cart');
        $user = Auth::user();
        $order_id = 'ORD-' . strtoupper(uniqid());
        $order_code = new OrderCode;
        $order_code->total_price = 0;
        // Loop through the cart and create a new order for each product
        foreach ($cart as $product) {

            // Create a new order in the database
            $order = new Orders;
            $order->user_id = $user->id;
            $order->order_id = $order_id; // Assign the same order ID to all orders
            $order->product_name = $product['product_name'];
            $order->quantity = $product['quantity'];
            $order->total_price = $product['price'] * $product['quantity'];
            $order_code->total_price += $product['price'] * $product['quantity'];
            // Save the order
            $order->save();
        }
        $order_code->order_id = $order_id;
        $order_code->save();
        // Empty the cart
        session()->forget('cart');

        // Redirect the user to the order confirmation page
        return redirect()->back()->with('message', 'Order successfully placed!');
    }
}
