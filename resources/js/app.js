
require('./bootstrap');

window.Vue = require('vue');

Vue.component('jumbo', require('./components/Jumbo.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('cards', require('./components/Cards.vue').default);
Vue.component('list', require('./components/List.vue').default);

Vue.component('addproduct', require('./components/Add/AddProduct.vue').default);
Vue.component('addorder', require('./components/Add/AddOrder.vue').default);
Vue.component('addquotation', require('./components/Add/AddQuotation.vue').default);

Vue.component('listproduct', require('./components/List/ListProducts.vue').default);
Vue.component('listorder', require('./components/List/ListOrders.vue').default);
Vue.component('listquotation', require('./components/List/ListQuotations.vue').default);

Vue.component('updateproduct', require('./components/Update/UpdateProducts.vue').default);
Vue.component('updateorder', require('./components/Update/UpdateOrders.vue').default);
Vue.component('updatequotation', require('./components/Update/UpdateQuotations.vue').default);


const app = new Vue({
    el: '#app',
});
