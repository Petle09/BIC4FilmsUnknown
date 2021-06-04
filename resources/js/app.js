/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

import vue from 'vue';

window.Vue = vue;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/MainMenuComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Hier Komponenten eintragen
Vue.component('mainMenu', require('./components/MainMenuComponent.vue').default);
Vue.component('query-message', require('./components/base/QueryMessage.vue').default);

//Own Components
Vue.component('listMovie', require('./components/ListMovieComponent.vue').default);
Vue.component('listActor', require('./components/ListActorComponent.vue').default);
Vue.component('searchActor', require('./components/SearchActorComponent.vue').default);
Vue.component('tables', require('./components/base/TableComponent.vue').default);
Vue.component('editActor', require('./components/EditActorComponent.vue').default);
Vue.component('createActor',require('./components/CreateActorComponent.vue').default);
Vue.component('createMovie',require('./components/CreateMovieComponent.vue').default);
Vue.component('showActor',require('./components/ShowActorComponent.vue').default);
Vue.component('showMovie',require('./components/ShowMovieComponent.vue').default);
Vue.component('editMovie',require('./components/EditMovieComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
