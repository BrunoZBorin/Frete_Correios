@extends('layouts.layout_app')
@section('content')
<jumbo titulo="Produtos"></jumbo>
@if(!empty($message))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
  <a href="/products/add" class="btn btn-primary mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach($products as $product)
        <list product="{{$product->name}}">
            <a href="/orders/{{$product->id}}/add" class="btn btn-info btn-sm mr-2">Pedido</a>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="far fa-edit"></i></button>
            <form method="post" action="/products/remove/{{$product->id}}"
                onsubmit="return confirm('Está certo da exclusão de {{$product->name}}?')">
                @csrf
                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </list>
        <!--<li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#">{{$product->name}}</a>
            <span class="d-flex">
                
            </span>
        </li>-->
    @endforeach
           
    </ul>
@endsection