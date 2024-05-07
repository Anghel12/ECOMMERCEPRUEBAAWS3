<?php

namespace App\Http\Controllers\Admin\ECommerce;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
 /*    public function __construct()
    {
        $this->middleware('can:admin.orders.index')->only('index', 'show');
        $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy'); 
     } */

    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();

        return view('admin.user.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($order)
    {

        $order = Order::with('posts')->find($order);
        
        return view('admin.orders.show', compact('order'));
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
}
