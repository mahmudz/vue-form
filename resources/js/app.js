import Vue from 'vue';
import VueForm from "./VueForm";
import VueProgressBar from 'vue-progressbar';

const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    inverse: false
}

Vue.use(VueProgressBar, options)

const token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.component('VueForm', VueForm);

new Vue({
    el: '#vue-form',
    render: h => h(VueForm)
});