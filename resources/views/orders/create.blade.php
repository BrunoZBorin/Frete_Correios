@extends('layout')
@section('header')
Adicionar Pedidos
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
            <label for="name">Nome do produto</label>
            <h5>{{$product->name}}</h5>
            <input type="hidden" id="product_id" name="product_id" value={{$product->id}}>
            <label for="CEP_Origem">CEP Origem</label>
            <input type="text" class="form-control" name="CEP_Origem">
            <label for="CEP_Destino">CEP Destino</label>
            <input type="text" class="form-control" name="CEP_Destino">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection