<template>
<div>
    <jumbo titulo="Cotações"></jumbo>
    <ul class="list-group">
        <li v-for="quotation in quotations" :key="quotation.index" class="list-group-item d-flex justify-content-between align-items-center">
            <a :href="'/quotations/'+quotation.id+'/edit'">Cotação nº{{quotation.id}}</a>
            <span class="d-flex">
                <a class="btn btn-primary btn-sm" :href="'/quotations/'+quotation.id+'/edit'"><i class="far fa-edit"></i></a>
            </span>
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