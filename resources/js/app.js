import Vue from 'vue';
import VueForm from "./VueForm";

const token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.component('VueForm', VueForm);

new Vue({
    el: '#vue-form',
    render: h => h(VueForm)
});