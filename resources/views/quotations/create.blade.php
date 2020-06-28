@extends('layout')
@section('header')
Adicionar Cotação
@endsection
@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name">Numero do pedido</label>
            <h5>{{$order->id}}</h5>
            <input type="hidden" id="order_id" name="order_id" value={{$order->id}}>
            <label for="code">Código do serviço</label>
            <select class="form-control" name="code">
                <option value="04014">SEDEX à vista</option>
                <option value="04510">PAC à vista</option>
            </select>
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection