@extends('layouts.layout_app')
@section('content')
<listproduct :products='{{ json_encode($products) }}'>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
</listproduct>
@endsection