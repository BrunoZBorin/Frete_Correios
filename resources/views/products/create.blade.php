@extends('layouts.layout_app')
@section('content')
@if(!empty($message))
        <div class="alert alert-danger">
            {{$message}}
        </div>
@endif
<addproduct>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</addproduct>
@endsection