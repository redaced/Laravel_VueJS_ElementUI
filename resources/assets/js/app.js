require('./bootstrap');
import Vue from 'vue'
import router from './router'
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'

Vue.use(ElementUI, { locale })
const app = new Vue({
    el: '#app',
    router
});