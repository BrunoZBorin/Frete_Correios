@extends('layouts.layout_app')
@section('content')
<updateproduct :product='{{ json_encode($product) }}'></updateproduct>
@endsection