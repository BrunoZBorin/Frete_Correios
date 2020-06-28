<?php

namespace App\Http\Controllers;

use App\Order;

use App\Quotation;

use App\Product;

use Illuminate\Http\Request;

class QuotationsController extends Controller
{
    function create(int $orderId)
    {   
        $order = Order::find($orderId);
        $quotation = $order->quotation;
        return view('quotations.create', compact('order','quotation'));
    }

    function store(Request $request)
    {
        
        $quotation = Quotation::create([
            'code' => $request->code,
            'order_id' => $request->order_id
        ]);
        
        $order = Order::find($request->order_id);
        
        $product = Product::find($order->product_id);

        $request->session()
            ->flash(
                'message',
                "Pedido {$quotation->id} cadastrado com sucesso"
            );
       
        return view('quotations.index', compact('order','quotation','product'));
    }
}
