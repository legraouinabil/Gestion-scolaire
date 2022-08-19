/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;



import Swal from 'sweetalert2'
window.Swal = Swal
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  window.Toast=Toast

  
import formation  from './components/Admin/Formation.vue';
import filier  from './components/Admin/Filier.vue';
import blog  from './components/Admin/Blog.vue';
/////////////////////////////////

Vue.component('Formation',formation);
Vue.component('Filier',filier);
Vue.component('Blog',blog);

const app = new Vue({
    el: '#app',
   
});
