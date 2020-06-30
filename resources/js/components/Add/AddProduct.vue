<template>
  
    <form method="post">
        <input type="hidden" name="_token" v-bind:value="csrf">
        <div class="form-group">
            <label for="name">Nome do produto</label>
            <input type="text" class="form-control" name="name">
            <label for="weight">Peso</label>
            <input type="text" class="form-control" name="weight">
            <label for="height">Altura</label>
            <input type="number" step="0.01" class="form-control" name="height">
            <label for="width">Largura</label>
            <input type="number" step="0.01" class="form-control" name="width">
            <label for="length">Comprimento</label>
            <input type="number" step="0.01" class="form-control" name="length">
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
    }
}
</script>

<style>

</style>