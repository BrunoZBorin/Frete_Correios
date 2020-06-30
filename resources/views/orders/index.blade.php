@extends('layouts.layout_app')
@section('content')
<listorder :orders='{{ json_encode($orders) }}'>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
</listorder>
@endsection