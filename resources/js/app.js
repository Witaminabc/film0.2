/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var Vue = require('vue');
var VueResource = require('vue-resource');

Vue.use(VueResource);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import StarRating from 'vue-star-rating';
import carousel from 'vue-owl-carousel';
import ClickOutside from 'vue-click-outside';
import  debounce  from "debounce";


// Then you can register the component globally:

Vue.component('star-rating', StarRating);
Vue.component('owl-carousel', carousel);
// Vue.component('v-click-outside', vClickOutside);

const app = new Vue({
    el: '#app4',
    data:{
                rating: 3,
                keywords: null,
                keywords2: null,

                results: [],
                results2:[],
                tabs2: ['one', 'two'],
                show2:true,
                currentTab2: '',
                tabs: ['Home', 'Profile', 'scripe'],
                show:true,
                currentTab: 'home',
                inlineRadioOptions:[],
                exampleFormControlSelect1:null,
                exampleFormControlSelect2:"",
                exampleFormControlSelect3:'',
                count:60000,
                count1:0,
                switch1:true,
                switch2:true,
                switch3:true,
                switch4:true,
                switch5:true
  },
  watch: {
                keywords(after, before) {
                    this.fetch();
                }
              },
  methods :{
  	onClickOutside() {
                  this.show2 = false;
              },
 			fetch() {
                axios.get('/search', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
            },
              fetch2() {
                axios.get('/formfilter', { params: { keywords2: this.exampleFormControlSelect1,keywords3:this.exampleFormControlSelect2,keywords4:this.exampleFormControlSelect3 } })
                .then(response => this.results2 = response.data)
                .catch(error => {'no send'});
                
            },
            

          



          currentTabComponent2(kok) {
           if(kok=='one'){
               this.show2 = true;
               this.currentTab2='one';
           }
           else{
               this.show2 = true;
               this.currentTab2='two';
           }


       }
  },
  computed: {
        currentTabComponent: function () {
          return 'tab-' + this.currentTab.toLowerCase()
      }
    },
    directives: {
    ClickOutside,
    debounce
  }
});
