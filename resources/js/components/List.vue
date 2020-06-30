<template>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="#">{{product.name}}</a>
        <span class="d-flex">
            <slot></slot>
        </span>
    </li>
</template>

<script>
export default {
    
    props:["product"]

}
</script>

<style>

</style>