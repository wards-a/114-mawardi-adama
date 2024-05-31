<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->fetchCategories();

        $breadcrumbs = [
            ['title' => 'Tas Belanja', 'url' => route('cart.show', encrypt(auth()->user()->id))],
            ['title' => 'Request Quotation', 'url' => '']
        ];

        // get requested item information
        $items = session()->get('requested_item'); // get items (cart item id)

        $cart_items = CartItem::whereIn('id', $items)->get();


        return view('user.order', compact('categories', 'breadcrumbs', 'cart_items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $this->validation($request);
        // validation failed
        if ($validator !== true) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // get input value
        $formData = $request->all();

        // get requested item information
        $items = session()->get('requested_item'); // get items (cart item id)
        $cart_items = CartItem::whereIn('id', $items)->get();
        
        if (count($cart_items) > 0) {            
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'customer_name' => $formData['name'],
                'customer_address' => $formData['cus_address'],
                'shipping_address' => $formData['shipping_address'],
                'phone_number' => $formData['phone_number'],
                'notes' => $formData['notes']
            ]);

            // move items in cart to order table
            foreach ($cart_items as $item) {
                // create order item
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'variant' => $item->variant->size,
                    'price' => $item->variant->selling_price
                ]);

                // remove item from cart
                $item->delete();
            }
        } else {
            return redirect()->route('cart.show', encrypt(auth()->user()->id))->with('notfound', 'No entry found!');
        }

        session()->forget('requested_item'); // delete items from session
        return redirect()->route('profile.show'); // soon redirect to order page
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function validation($request)
    {
        $rules = [
            'name' => 'required|max:100',
            'cus_address' => 'required|max:255',
            'shipping_address' => 'max:255',
            'phone_number' => 'required|max:25',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $validator;
        }

        return true;
    }
}
