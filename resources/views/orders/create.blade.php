@extends('layouts.layout_app')
@section('content')
<jumbo titulo="Adicionar Pedido"></jumbo>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<addorder name="{{$product->name}}" id="{{$product->id}}" ></addorder>
    
@endsection