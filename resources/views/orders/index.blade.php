@extends('layout')
@section('header')
Lista de Pedidos
@endsection
@section('content')

@if(!empty($message))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
    
    <ul class="list-group">
    @foreach($orders as $order)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="l-flex">
                Pedido nº {{$order->id}}
            </span>
            <span class="d-flex">
                <a href="/quotations/{{$order->id}}/add" class="btn btn-info btn-sm mr-2">Cotação</a>
                <form method="post" action="/orders/remove/{{$order->id}}"
                    onsubmit="return confirm('Está certo da exclusão de {{$order->id}}?')">
                    @csrf
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </span>
        </li>
    @endforeach
    </ul>
@endsection