<template>
<div>
    <jumbo titulo="Cotações"></jumbo>
    <slot></slot>
    <ul class="list-group">
        <a btn btn-primary href="/">Tela inicial</a>
        <li v-for="quotation in quotations" :key="quotation.index" class="list-group-item d-flex justify-content-between align-items-center">
            <span class="d-flex">
                <a :href="'/quotations/'+quotation.id+'/edit'">Cotação nº{{quotation.id}} |</a>
                <h6>| Valor do frete R${{quotation.freight}} |</h6>
                <h6>| Prazo {{quotation.deadline}} dias</h6>
            </span>
                <a class="btn btn-primary btn-sm" :href="'/quotations/'+quotation.id+'/show'">Ver Cotação</a>
            
        </li>
    </ul>
</div>
</template>

<script>
export default {
    props:["quotations"],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
}
</script>

<style>

</style>