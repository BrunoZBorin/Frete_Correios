
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('jumbo', require('./components/Jumbo.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('cards', require('./components/Cards.vue').default);
Vue.component('list', require('./components/List.vue').default);
Vue.component('addproduct', require('./components/Add/AddProduct.vue').default);
Vue.component('addorder', require('./components/Add/AddOrder.vue').default);
Vue.component('addquotation', require('./components/Add/AddQuotation.vue').default);



const app = new Vue({
    el: '#app',
});
