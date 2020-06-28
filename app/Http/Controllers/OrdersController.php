<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class OrdersController extends Controller
{
    function create()
    {
        return view('orders.create');
    }
}
