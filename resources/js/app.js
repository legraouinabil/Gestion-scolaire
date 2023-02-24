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
import module  from './components/Admin/Module.vue';
import stagaire  from './components/Admin/Stagaire.vue';
import formateur  from './components/Admin/Formateur.vue';
import filier  from './components/Admin/Filier.vue';
import profile  from './components/Admin/Profile.vue';
import blog  from './components/Admin/Blog.vue';////
import setting  from './components/Admin/Setting.vue';////
/////////////////////////////////////////////////////////////

import course  from './components/Formateur/Course.vue';
/////////////////////////////////



Vue.component('Course',course);
Vue.component('Module',module);
Vue.component('Formation',formation);
Vue.component('Stagaire',stagaire);
Vue.component('Formateur',formateur);
Vue.component('Filier',filier);
Vue.component('Profile',profile);
Vue.component('Blog',blog);
Vue.component('Setting' , setting);

const app = new Vue({
    el: '#app',
   
});
