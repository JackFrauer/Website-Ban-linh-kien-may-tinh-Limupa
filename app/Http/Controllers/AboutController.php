<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Users;
use App\Models\OrderCode;
use App\Models\Products;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function index(){
        return view('about',[
            'users'=>Users::all(),
            'orders' => OrderCode::all(),
            'products' => Products::all(),
            'types' => Manufacturer::all()
            
        ]);
    }
}
