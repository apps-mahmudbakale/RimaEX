<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    
    public function create(){
        return view('banks.create');
    }

    public function store(Request $request){

        $bank = Bank::create(array_merge($request->all(), ['user_id' => auth()->user()->id]));
        return redirect()->route('app.portfolio.index')->with('success', 'Bank Added Successfully');
    }
}
