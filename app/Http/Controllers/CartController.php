<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

   
    public function add(Request $request){

        $product = Product::find($request->id);

        if(!$product){
            return redirect()->back()->with('error', 'product not found');
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
        }else{
            $cart[$product->id]=[
                'name'=>$product->name,
                'quantity'=>1,
                'price'=>$product->price,
                'image'=>$product->image
            ];

        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart');
    }
    // Method to display the cart page
    public function index(){
        // Retrieve the cart from the session, default to an empty array if not present
        $cart = session()->get('cart', []);
         // Calculate the subtotal by summing the price * quantity of each item in the cart
         $subtotal= array_reduce($cart, function($carry, $item)
         {
            return $carry + ($item['price'] * $item['quantity']);
         }, 0);
        // Pass the cart and subtotal to the 'cart.index' view
        return view('cart.index')->with([
            'cart'=> $cart,
            'subtotal'=>$subtotal
    ]);
    }

    // Method to remove an item from the cart
    public function remove(Request $request)
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Check if the item exists in the cart
        if (isset($cart[$request->id])) {
            // Remove the item from the cart
            unset($cart[$request->id]);

            // Update the session with the modified cart
            session()->put('cart', $cart);
        }

        // Redirect back to the cart page with a success message
        return redirect()->route('cart.index')->with('success', 'Product removed from cart');
    }

    // Method to update the quantities of items in the cart
    public function update(Request $request){

         // Validate the request to ensure quantity is an array / solving the quantity array error
        $validated = $request->validate([
            'quantity' => 'required|array',
            'quantity.*' => 'integer|min:1'
        ]);

        $cart =session()->get('cart', []);
        
         // Loop through the request's quantity data
         foreach ($request->quantity as $id => $quantity) {
            // Check if the item exists in the cart
            if (isset($cart[$id])) {
                // Update the item's quantity in the cart
                $cart[$id]['quantity'] = $quantity;
            }
        }

        session()->put('cart', $cart);

        // Redirect back to the cart page with a success message
        return redirect()->route('cart.index')->with('success', 'Cart updated');

    }

    public function clearCart()
{
    // Clear the cart session data
    session()->forget('cart');

    return redirect()->route('cart.index')->with('success', 'Cart has been cleared.');
}
}
