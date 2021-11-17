/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Barra de navegação
Vue.component('navbar-component', require('./components/Navbar.vue').default);
// Carousel
Vue.component('carousel-component', require('./components/Carousel.vue').default);
// Benefits
Vue.component('benefits-component', require('./components/Benefits.vue').default);
// Question
Vue.component('question-component', require('./components/Question.vue').default);
//Info
Vue.component('info-component', require('./components/Info.vue').default);
// Model
Vue.component('model-component', require('./components/Model.vue').default);
// Gallery
Vue.component('gallery-component', require('./components/Gallery.vue').default);
//Newsletter
Vue.component('newsletter-component', require('./components/Newsletter.vue').default);
//Footer
Vue.component('footer-component', require('./components/Footer.vue').default);
// Header
Vue.component('header-component', require('./components/Header.vue').default);
// What we do
Vue.component('what-we-do-component', require('./components/WhatWeDo.vue').default);
// Feedback
Vue.component('feedback-component', require('./components/Feedback.vue').default);
// Plans
Vue.component('plans-component', require('./components/Services/Plans.vue').default);


//Filtros
// Retorna o ano atual
Vue.filter('getYear', function(){
    let date = new Date();

    return date.getFullYear();
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
