<template>
<div>
    <jumbo titulo="Pedidos"></jumbo>
    <slot></slot>
    <ul class="list-group">
        <li v-for="order in orders" :key="order.index" class="list-group-item d-flex justify-content-between align-items-center">
            <a :href="'/orders/'+order.id+'/edit'">Pedido nº{{order.id}}</a>
            <span class="d-flex">
                <a :href="'/quotations/'+order.id+'/add'" class="btn btn-info btn-sm mr-2">Cotação</a>
                <a class="btn btn-primary btn-sm" :href="'/orders/'+order.id+'/edit'"><i class="far fa-edit"></i></a>
            </span>
        </li>
    </ul>
</div>
</template>

<script>
export default {
    props:["orders"],
    data:function(){
            return{
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }    
    }
}
</script>

<style>

</style>