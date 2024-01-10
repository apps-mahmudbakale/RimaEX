<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\User;
use App\Models\Order;
use App\Models\Security;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $securitiesValues = DB::table('securities')->join('commodities', 'securities.commodity_id', '=', 'commodities.id')->where('securities.user_id', '=', auth()->user()->id)->sum(DB::raw('commodities.current_price * securities.security_qty'));
        $banks = Bank::where('user_id', auth()->user()->id)->get();
        return view('portfolio.index', ['securitiesValues' => $securitiesValues, 'banks' => $banks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function securities()
    {
        $orders = Security::paginate(10);
        return view('portfolio.orders', compact('orders'));
    }

    public function orders()
    {
        $orders = Order::paginate(10);
        return view('portfolio.orders', compact('orders'));
    }
    
    public function profile($id)
    {
        $user = User::findOrFail($id);
        $securitiesValues = DB::table('securities')->join('commodities', 'securities.commodity_id', '=', 'commodities.id')->where('securities.user_id', '=', $user)->sum(DB::raw('commodities.current_price * securities.security_qty'));
        $orders = Order::where('user_id', $user->id)->paginate(10);
        $securities = Security::where('user_id', $user->id)->get();
        $transactions = Transaction::where('user_id', $user->id)->get();
        $banks = Bank::where('user_id', auth()->user()->id)->get();
        return view('portfolio.profile', compact('user','securities', 'orders', 'securitiesValues', 'banks', 'transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
