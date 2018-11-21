require('./bootstrap');

window.Vue = require('vue');

import LogarComponent from './components/LogarComponent.vue'
import ListaUsuarioComponent from './components/ListaUsuarioComponent.vue'
import HomepageComponent from './components/HomepageComponent.vue'

const app = new Vue({
    el: '#app',

    components: {
        LogarComponent,
        ListaUsuarioComponent,
        HomepageComponent,        
    }
});
