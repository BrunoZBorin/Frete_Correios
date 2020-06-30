<template>
<div>
    <jumbo titulo="Editar Produto"></jumbo>
     <form method="POST" action="/products/update">
        <input type="hidden" name="_token" v-bind:value="csrf">
        <div class="form-group">
            <input type="hidden" :value="product.id" name="id">
            <label for="name">Nome do produto</label>
            <input type="text"  class="form-control"  v-model="product.name" name="name" id="name" >
            <label for="weight">Peso</label>
            <input type="text"  class="form-control" v-model="product.weight" name="weight" id="weight">
            <label for="height">Altura</label>
            <input type="number"  step="0.01" class="form-control" v-model="product.height" name="height" id="height">
            <label for="width">Largura</label>
            <input type="number"  step="0.01" class="form-control" v-model="product.width" name="width" id="width">
            <label for="length">Comprimento</label>
            <input type="number"  step="0.01" class="form-control" v-model="product.length" name="length" id="length">
        </div>
        <div class="d-flex">
            <button href="/products/update" class="btn btn-primary">Alterar</button>
            <button href="list_products" class="btn btn-danger">Cancelar</button>
        </div>
    </form>
</div>
</template>

<script>
export default {
    props:['product'],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },   
}
    
        
 

</script>

<style>

</style>