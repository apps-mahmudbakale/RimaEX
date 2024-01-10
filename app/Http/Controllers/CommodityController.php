<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use App\Models\WareHouse;
use Illuminate\Http\Request;
use App\Http\Requests\CommodityFormRequest;

class CommodityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('commodities.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warehouses = WareHouse::all();
        return view('commodities.create', compact('warehouses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommodityFormRequest $request)
    {
        $commodity = Commodity::create($request->all());
        
        return redirect()->route('app.commodities.index')->with('success', 'Commodity Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function show(Commodity $commodity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function edit(Commodity $commodity)
    {
        return view('commodities.edit', compact('commodity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function update(CommodityFormRequest $request, Commodity $commodity)
    {
        $commodity->update($request->all());
        
        return redirect()->route('app.commodities.index')->with('success', 'Commodity Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commodity $commodity)
    {
        $commodity->delete();
        
        return redirect()->route('app.commodities.index')->with('success', 'Commodity Deleted Successfully');
    }
}
