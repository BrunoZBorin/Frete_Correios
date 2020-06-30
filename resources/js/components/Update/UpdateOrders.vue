<template>
<div>
    <jumbo titulo="Editar Pedido"></jumbo>
     <form method="POST" action='/orders/update'>
        <input type="hidden" name="_token" v-bind:value="csrf">
        <div class="form-group">
            <input type="hidden" :value="order.id" name="id">
            <label for="name">Nome do produto</label>
            <h5>{{product.name}}</h5>
            
            <label for="CEP_Origem">CEP Origem</label>
            <input type="text" class="form-control" v-model="order.CEP_Origem" name="CEP_Origem">
            <label for="CEP_Destino">CEP Destino</label>
            <input type="text" class="form-control" v-model="order.CEP_Destino" name="CEP_Destino">
        </div>
        <div class="d-flex">
            <button href="/orders/update" class="btn btn-primary">Alterar</button>
            <button href='list_orders' class="btn btn-danger">Cancelar</button>
        </div>
    </form>
</div>
</template>

<script>
export default {
    props:['product', 'order'],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },   
}
    
        
 

</script>

<style>

</style>