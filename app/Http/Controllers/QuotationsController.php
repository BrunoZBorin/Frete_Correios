<?php

namespace App\Http\Controllers;

use App\Order;

use App\Quotation;

use App\Product;

use Illuminate\Http\Request;

class QuotationsController extends Controller
{
    function index(Request $request) 
    {
        $quotations = Quotation::query()
        ->orderBy('id')
        ->get();
        $message = $request->session()->get('message');
        
        return view('quotations.index', compact('quotations','message'));
    }
    
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
            'order_id' => $request->order_id,
            'freight' => $request->freight,
            'deadline'=> $request->deadline
        ]);
        
        $request->session()
            ->flash(
                'message',
                "Pedido {$quotation->id} cadastrado com sucesso"
            );
       
            return redirect ('/quotations');
    }
    function calculate(Request $request)
    {
        $code = $request->code;
                
        $order = Order::find($request->order_id);
        
        $product = Product::find($order->product_id);

        return view('quotations.calculate', compact('order','code','product'));
    }
    function show(int $id)
    {
        $quotation = Quotation::find($id);
        $order = Order::find($quotation->order_id);
        $product = Product::find($order->product_id);
        return view('quotations.update', compact('product','order','quotation'));
    }
}
