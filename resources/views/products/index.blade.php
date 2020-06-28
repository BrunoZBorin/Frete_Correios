@extends('layout')
@section('header')
Lista de Produtos
@endsection
@section('content')

@if(!empty($message))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
    <a href="/products/add" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach($products as $product)
        <li class="list-group-item d-flex justify-content-between align-items-center">{{$product->name}}
            <span class="d-flex">
                <a href="/orders/{{$product->id}}/add" class="btn btn-info btn-sm mr-2">Pedido</a>
                <form method="post" action="/products/remove/{{$product->id}}"
                    onsubmit="return confirm('Está certo da exclusão de {{$product->name}}?')">
                    @csrf
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </span>
        </li>
    @endforeach
    </ul>
@endsection