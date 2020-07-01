<template>
<div>
    <jumbo titulo="Cotação"></jumbo>
    <ul class="list-group">
        <li class="list-group-item align-items-center">
            <h5>Nome do produto: {{product.name}}</h5>
        </li>
        <li class="list-group-item align-items-center justify-content-between">
            <h6>Peso: {{product.weight}}</h6> <h6>Altura: {{product.height}} </h6>
        </li>
        <li class="list-group-item align-items-center justify-content-between">
            <h6>Largura: {{product.width}}</h6> <h6>Comprimento: {{product.length}} </h6>
        </li>
        <li class="list-group-item align-items-center justify-content-between">
            <h6>Cep Origem: {{order.CEP_Origem}}</h6> <h6>Cep Destino: {{order.CEP_Destino}} </h6>
        </li>
         <li class="list-group-item align-items-center justify-content-between">
            <h6>Valor do frete R${{quotation.freight}}</h6> <h6>Codigo:{{quotation.code}}</h6> <h6>Prazo {{quotation.deadline}} dias</h6>
        </li>             
    </ul>
    <a href='/quotations' class="btn btn-primary">Voltar</a>
</div>
</template>

<script>
export default {
    props:['product','quotation','order'],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
}
</script>

<style>

</style>