<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {   
        $commodities = Commodity::all();
        return view('welcome', ['commodities' => $commodities]);
    }
}
