/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue';
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    mounted(){
    	this.$validator.setLocale('en');
    },
    methods:{
    	validateContactForm(e){
    		this.$validator.validateAll();
            if (this.errors.any()) {
                e.preventDefault();
            }
    	}
    }
});

$(function(){
  $('.showcase-album-container').masonry({
    // options
    itemSelector : '.showcase-album-item'
  });
  baguetteBox.run('.gallery');
});