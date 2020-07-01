<template>
<div>
    <jumbo titulo="Produtos"></jumbo>
    <slot></slot>
    <div class="form-inline justify-content-between">
        <a href="/products/add" class="btn btn-primary mb-2">Adicionar</a>  
        <input type="search" placeholder="Buscar Produto" class="form-control mb-2" v-model="search">
    </div>
    <ul class="list-group">
        <li v-for="product in list" :key="product.index" class="list-group-item d-flex justify-content-between align-items-center">
            <a :href="'/products/'+product.id+'/edit'">{{product.name}}</a>
            <span class="d-flex">
                <a :href="'/orders/'+product.id+'/add'" class="btn btn-info btn-sm mr-2">Pedido</a>
                <a class="btn btn-primary btn-sm" :href="'/products/'+product.id+'/edit'"><i class="far fa-edit"></i></a>
                
                <form method="post" :action="'/products/remove/'+product.id+''"
                    onsubmit="return confirm('Está certo da exclusão?')">
                    <input type="hidden" name="_token" :value="csrf">
                    <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                </form>
            </span>
        </li>
    </ul>
</div>
</template>

<script>
export default {
    props:["products", "message"],
    data:function(){
            return{
                search:'',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }    
    },
    computed:{
        list:function(){
            return this.products.filter(res =>{
                if(res.name.toLowerCase().indexOf(this.search.toLowerCase())>=0){
                    return true;
                }else{
                    return false;
                }
            });
            return this.products
        }
    }
}
</script>

<style>

</style>