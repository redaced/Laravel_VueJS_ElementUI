import VueRouter from 'vue-router'
import Vue from 'vue'

Vue.use(VueRouter)

import Home from '../pages/index.vue'
import NotFound from '../pages/404.vue'

const router = new VueRouter({
    routes : [
        { path: '/', component: Home },
        { path: '*', component: NotFound }
    ]
})

export default router