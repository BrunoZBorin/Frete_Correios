<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Requests\ProductsFormRequest;

class ProductsController extends Controller
{
    function index(Request $request) 
    {
        $products = Product::query()
        ->orderBy('name')
        ->get();
        $message = $request->session()->get('message');
        return view('products.index', compact('products','message'));
    }
    function create()
    {
        return view('products.create');
    }
    function store(ProductsFormRequest $request)
    {
        $product = Product::create($request->all());
        $request->session()
            ->flash(
                'message',
                "Produto {$product->id} cadastrado com sucesso"
            );
       
        return redirect ('/products');
    }
    function destroy(Request $request)
    {
        Product::destroy($request->id);
        return redirect ()->route('list_products');
    }
    function edit(int $id)
    {
        $product = Product::find($id);
        return view('products.update', compact('product'));
    }
    function update(ProductsFormRequest $request)
    {
        $product = Product::find($request->id);
        $newName = $request->name;
        $product->name = $newName;
        $newWeight = $request->weight;
        $product->weight = $newWeight;
        $newheight = $request->height;
        $product->height = $newheight;
        $newwidth = $request->width;
        $product->width = $newwidth;
        $newlength = $request->length;
        $product->length = $newlength;
        $product->save();
        return redirect ()->route('list_products');
    }
}
