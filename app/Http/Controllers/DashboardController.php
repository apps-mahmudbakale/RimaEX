<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $securitiesValues = DB::table('securities')->join('commodities', 'securities.commodity_id', '=', 'commodities.id')->where('securities.user_id', '=', auth()->user()->id)->sum(DB::raw('commodities.current_price * securities.security_qty'));

        return view('dashboard', ['securitiesValues' => $securitiesValues]);
    }
}
