<template>
<div>
    <jumbo titulo="Produtos"></jumbo>
    <div v-if="message" class="alert alert-success">
        {{message}}
    </div>
    <a href="/products/add" class="btn btn-primary mb-2">Adicionar</a>  
    <ul class="list-group">
        <li v-for="product in products" :key="product.index" class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#">{{product.name}}</a>
            <span class="d-flex">
                <a :href="'/orders/'+product.id+'/add'" class="btn btn-info btn-sm mr-2">Pedido</a>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="far fa-edit"></i></button>
                
                <form method="post" :action="'/products/remove/'+product.id+''"
                    onsubmit="return confirm('Está certo da exclusão de name?')">
                    <input type="hidden" name="_token" :value="csrf">
                    <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                </form>
            </span>
        </li>
    </ul>
</div>
</template>

<script>
export default {
    props:["products","message"],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
}
</script>

<style>

</style>


<!--@if(!empty($message))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
"'/orders/'+product.id+'/add'"
  <a href="/products/add" class="btn btn-primary mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach($products as $product)
        <list :product='{{ json_encode($product) }}'>
            <a href="/orders/{{$product->id}}/add" class="btn btn-info btn-sm mr-2">Pedido</a>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="far fa-edit"></i></button>
            <form method="post" action="/products/remove/{{$product->id}}"
                onsubmit="return confirm('Está certo da exclusão de {{$product->name}}?')">
                @csrf
                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </list>
        <!--<li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#">{{$product->name}}</a>
            <span class="d-flex">
                
            </span>
        </li>
    @endforeach
           
    </ul>-->