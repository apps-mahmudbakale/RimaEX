<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Wallet;
use App\Models\Security;
use App\Models\Commodity;
use Illuminate\Http\Request;
use App\Events\SellOrderEvent;
use App\Classes\Order as AppOrder;
use App\Exceptions\GeneralException;
use RealRashid\SweetAlert\Facades\Alert;
use App\Classes\Commodity as AppCommodity;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AppOrder $order)
    {
        try {
            $order->create($request->all());
            broadcast(new SellOrderEvent());
        } catch (GeneralException $e) {
            return redirect()->route('app.market.index')->with('error', $e->getMessage());
        }
       
        return redirect()->route('app.market.index')->with('success', 'Your Order Has Been Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    public function approve(AppOrder $order, $id)
    {
        $order->approveOrder($id);

        return redirect()->route('app.orders.index')->with('success', 'Order Has Been Approved');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
