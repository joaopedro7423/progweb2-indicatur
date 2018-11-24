require('./bootstrap');

window.Vue = require('vue')


import VueRouter from 'vue-router'
import LogadoComponent from './components/LogadoComponent.vue'
import ListaUsuarioComponent from './components/ListaUsuarioComponent.vue'
import HomepageComponent from './components/HomepageComponent.vue'
import LoginComponent from './components/LoginComponent.vue'
import PerfilComponent from './components/Usuario/PerfilComponent.vue'

Vue.use(VueRouter)

let routes = [
    {path: '/logado', component: LogadoComponent},
    {path: '/perfil', component: PerfilComponent},
    {path: '/home', component: HomepageComponent},
    
]

const router = new VueRouter({
    routes
})
const app = new Vue({
    el: '#app',
    
    router,

    components: {
        LogadoComponent,
        ListaUsuarioComponent,
        HomepageComponent,
        LoginComponent,
        PerfilComponent,       
    }
});
