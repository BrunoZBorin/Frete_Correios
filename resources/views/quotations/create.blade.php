@extends('layouts.layout_app')
@section('content')
<jumbo titulo="Adicionar Cotação"></jumbo>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<addquotation  id="{{$order->id}}"></addquotation>
@endsection