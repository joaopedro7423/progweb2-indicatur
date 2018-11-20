require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));
import ListaUsuarioComponent from './components/ListaUsuarioComponent.vue'
import HomepageComponent from './components/HomepageComponent.vue'

const app = new Vue({
    el: '#app',

    components: {
        ListaUsuarioComponent,
        HomepageComponent
    }
});
