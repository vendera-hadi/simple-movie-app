
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const axios = require('axios');

window.Vue = require('vue');

import wysiwyg from "vue-wysiwyg"
import Datepicker from 'vuejs-datepicker'
import StarRating from 'vue-star-rating'
import InputTag from 'vue-input-tag'

Vue.use(wysiwyg, {});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component(
    'film-lists',
    require('./components/FilmLists.vue')
);

Vue.component(
    'film-box',
    require('./components/FilmBox.vue')
);

Vue.component(
    'film-single',
    require('./components/FilmSingle.vue')
);

Vue.component(
    'text-editor',
    require('./components/TextEditor.vue')
);

Vue.component(
    'datepicker',
    Datepicker
);

Vue.component(
  'rating',
  require('./components/Rating.vue')
);

Vue.component(
  'star-rating',
  StarRating
);

Vue.component(
  'country-selector',
  require('./components/CountrySelector.vue')
);

Vue.component(
  'input-tag',
  InputTag
);

Vue.component(
  'tags-inputer',
  require('./components/TagsInputer.vue')
);




const app = new Vue({
    el: '#app'
});
