<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function landing(){
        return view('dashboard.landing');
    } 

    public function order(){
        return view('dashboard.order');
    } 

    public function cart(){
        return view('dashboard.cart');
    } 
}
