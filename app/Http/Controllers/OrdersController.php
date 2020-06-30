<?php

namespace App\Http\Controllers;

use App\Order;

use Illuminate\Http\Request;

use App\Http\Requests\OrdersFormRequest;

use App\Product;

class OrdersController extends Controller
{
    function index(Request $request) 
    {
        $orders = Order::query()
        ->orderBy('id')
        ->get();
        $message = $request->session()->get('message');
        return view('orders.index', compact('orders','message'));
    }

    function create(int $productId)
    {   
        $product = Product::find($productId);
        $order = $product->order;
        return view('orders.create', compact('order','product'));
    }

    function store(OrdersFormRequest $request)
    {
        $order = Order::create([
            'CEP_Origem' => $request->CEP_Origem,
            'CEP_Destino' => $request->CEP_Destino,
            'product_id' => $request->product_id
            ]);
        $request->session()
            ->flash(
                'message',
                "Pedido {$order->id} cadastrado com sucesso"
            );
       
        return redirect ('/orders');
    }

    function edit(int $id)
    {
        $order = Order::find($id);
        $product = Product::find($order->product_id);
        return view('orders.update', compact('product','order'));
    }
    function update(OrdersFormRequest $request)
    { 
        $order = Order::find($request->id);
        $newOrigem = $request->CEP_Origem;
        $order->CEP_Origem = $newOrigem;
        $newDestino = $request->CEP_Destino;
        $order->CEP_Destino = $newDestino;

        $order->save();
        return redirect ()->route('list_orders');
    }
}
