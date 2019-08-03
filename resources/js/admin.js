/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery')

require('tether');
require('waves/dist/waves.min');
require('jquery.scrollbar');
require('jquery.flot');
require('jquery-flot-resize');
require('flot.curvedlines');
require('vmap');
require('easy-pie-chart');
require('salvattore');
require('jquery-sparkline');
require('moment');
require('fullcalendar');


require ('../../public/addon/flot-charts/curved-line');
require ('../../public/addon/flot-charts/chart-tooltips');
require ('../../public/addon/flot-charts/line');
require ('../../public/addon/other-charts');
require ('../../public/addon/jqvmap');
require ('../../public/addon/app.min');
require ('../../public/addon/fontawesome/js/all');
    /**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/*=========  LANG  */
var Vue = require('vue');
var Lang = require('vuejs-localization');

//Notice that you need to specify the lang folder, in this case './lang'
Lang.requireAll(require.context('./lang', true, /\.js$/));

Vue.use(Lang);

/* =========== COMPONENT   */
Vue.component('zoneeditor', require('./components/admin/zone/zoneeditor').default);
Vue.component('error', require('./components/custom/error.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted:function () {
        this.$lang.setLang('fa');
    }

});
