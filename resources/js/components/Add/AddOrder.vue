<template>
  <form method="post">
      <input type="hidden" name="_token" v-bind:value="csrf">
        <div class="form-group">
            <label for="name">Nome do produto</label>
            <h5>{{name}}</h5>
            <input type="hidden" id="product_id" name="product_id" v-bind:value="id">
            <label for="CEP_Origem">CEP Origem</label>
            <input type="text" class="form-control" name="CEP_Origem">
            <label for="CEP_Destino">CEP Destino</label>
            <input type="text" class="form-control" name="CEP_Destino">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    props:['name','id']

}
</script>

<style>

</style>