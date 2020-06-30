@extends('layouts.layout_app')
@section('content')
<updatequotation :quotation='{{ json_encode($quotation) }}'></updatequotation>
@endsection