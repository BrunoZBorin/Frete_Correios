@extends('layouts.layout_app')
@section('content')
<updateorder :order='{{ json_encode($order) }}' :product='{{ json_encode($product) }}'></updateorder>
@endsection