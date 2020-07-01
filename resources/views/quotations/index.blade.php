@extends('layouts.layout_app')
@section('content')
<listquotation :quotations='{{ json_encode($quotations) }}'>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
</listquotation>
@endsection