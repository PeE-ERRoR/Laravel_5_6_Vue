
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 import VueAxios from 'vue-axios';
 import axios from 'axios';
 // import Toastr from './components/enso/bulma/toastr';
 // import fontawesome from '@fortawesome/fontawesome';
 // import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

 require('./bootstrap');

 window.Vue = require('vue');
 Vue.use(VueAxios, axios);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('coin-add-component', require('./components/AddComponent.vue'));
Vue.component('chart-component', require('./components/ChartComponent.vue'));
Vue.component('datatable-component', require('./components/DatatableComponent.vue'));
Vue.component('content-component', require('./components/ContentComponent.vue'));
Vue.component('event-component', require('./components/EventComponent.vue'));

const app = new Vue({
    el: '#app'
});
