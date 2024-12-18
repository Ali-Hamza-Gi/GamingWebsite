<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    function pricing()
    {
        $pricingGroup = Pricing::all()->groupBy('duration');
        return view('website.pricing', compact('pricingGroup'));
    }
    function add_cart(Request $request)
    {

        $request->validate([
            'id' => 'required|integer',
            'duration' => 'required|string',
            'game_quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);


        $cart = session()->get('cart', []);

        $itemExists = false;
        foreach ($cart as &$item) {
            if ($item['id'] == $request->id && $item['duration'] == $request->duration) {
                $item['quantity'] += 1; // Increment quantity
                $itemExists = true;
                break;
            }
        }

        if (!$itemExists) {
            $cart[] = [
                'id' => $request->id,
                'duration' => $request->duration,
                'game_quantity' => $request->game_quantity,
                'price' => $request->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        $message = ucfirst($request->duration) . " {$request->game_quantity} " . ($request->game_quantity == 1 ? 'Game' : 'Games') . " for $" . number_format($request->price, 2) . " added to cart!";
        return redirect()->back()->with('success', $message);
    }
    function remove(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'duration' => 'required|string',
        ]);

        $cart = session()->get('cart', []);

        // Filter out the item to be removed
        $cart = array_filter($cart, function ($item) use ($request) {
            return !($item['id'] == $request->id && $item['duration'] == $request->duration);
        });

        // Reindex the cart array and save it back to the session
        $cart = array_values($cart);
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item removed from cart!');
    }

    function checkout()
    {
        return view('website.checkout');
    }
}
