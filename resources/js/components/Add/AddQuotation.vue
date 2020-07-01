<template>
  <form method="post" action='/quotations/calculate'>
      <input type="hidden" name="_token" v-bind:value="csrf">
        <div class="form-group">
            <label for="name">Numero do pedido</label>
            <h5>{{id}}</h5>
            <input type="hidden" id="order_id" name="order_id" v-bind:value="id">
            <label for="code">Código do serviço</label>
            <select class="form-control" name="code">
                <option value="04014">SEDEX à vista</option>
                <option value="04510">PAC à vista</option>
            </select>
        </div>
        <button href='/quotations/calculate' class="btn btn-primary">Adicionar</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    props:['id']

}
</script>

<style>

</style>