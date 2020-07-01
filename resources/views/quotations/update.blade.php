@extends('layouts.layout_app')
@section('content')
<updatequotation :product='{{ json_encode($product) }}' :order='{{ json_encode($order) }}':quotation='{{ json_encode($quotation) }}'></updatequotation>
@endsection