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
import messages from './locale/nl';
import VeeValidate , { Validator } from 'vee-validate';
Vue.use(VeeValidate);
Validator.updateDictionary({
    nl: {
        messages
    }
});

//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data:{
    	contactInfo: {
    		naam: '',
	    	adres: '',
	    	gemeente: '',
	    	telefoon: '',
	    	email: '',
	    	bericht: ''
    	},
    	formControl: {
    		showForm: true,
    		showCheckmark: false
    	}
    },
    mounted(){
    	this.$validator.setLocale('nl');
    },
    methods:{
    	validateContactForm(e){
    		this.$validator.validateAll();
            if (!this.errors.any()) {
            	console.log(this.contactInfo);
            	this.$http.post('/contact', this.contactInfo).then(function(response){
            		this.formControl.showForm = false;
            		this.formControl.showCheckmark = true;
            	});
            }
            e.preventDefault();
    	}
    }
});

$(function(){
  $('.showcase-album-container').masonry({
    itemSelector : '.showcase-album-item'
  });
  baguetteBox.run('.gallery');
});