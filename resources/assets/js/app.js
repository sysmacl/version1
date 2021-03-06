
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import componentePrueba from './vue/components/ExampleComponent.vue';
import Element from 'element-ui';
import locale from 'element-ui/lib/locale/lang/es';

Vue.use(Element, {locale});

var prueba = new Vue({
    el: '#componente-prueba',
    components: {
        componentePrueba
    },
    data() {
        return {
            
        }
    }
});
