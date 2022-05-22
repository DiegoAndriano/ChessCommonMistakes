import Vue from 'vue'
import {chessboard} from 'vue-chessboard'
import 'vue-chessboard/dist/vue-chessboard.css'


window.Vue = require('vue');

Vue.component('logosmall-component', require('./SVGs/LogoSmall.vue').default);
Vue.component('logomedium-component', require('./SVGs/LogoMedium.vue').default);
Vue.component('logodesktop-component', require('./SVGs/LogoDesktop.vue').default);
Vue.component('chess-component', require('./components/Chess.vue').default);

export const EventBus = new Vue();

const app = new Vue({
    el: '#app',

});

require('./bootstrap');
