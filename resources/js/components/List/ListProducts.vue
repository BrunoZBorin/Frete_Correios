<template>
<div>
    <jumbo titulo="Produtos"></jumbo>
    <slot></slot>
    <a href="/products/add" class="btn btn-primary mb-2">Adicionar</a>  
    <ul class="list-group">
        <li v-for="product in products" :key="product.index" class="list-group-item d-flex justify-content-between align-items-center">
            <a :href="'/products/'+product.id+'/edit'">{{product.name}}</a>
            <span class="d-flex">
                <a :href="'/orders/'+product.id+'/add'" class="btn btn-info btn-sm mr-2">Pedido</a>
                <a class="btn btn-primary btn-sm" :href="'/products/'+product.id+'/edit'"><i class="far fa-edit"></i></a>
                
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
    props:["products", "message"],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
}
</script>

<style>

</style>