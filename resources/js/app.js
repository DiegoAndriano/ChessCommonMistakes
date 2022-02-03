import Vue from 'vue'
import {chessboard} from 'vue-chessboard'
import 'vue-chessboard/dist/vue-chessboard.css'


window.Vue = require('vue');

Vue.component('chess-component', require('./components/Chess.vue').default);

export const EventBus = new Vue();
const app = new Vue({
    el: '#app',

});



require('./bootstrap');

// const app = Vue({});
// app
//     .component('leaflet-geosearch', LeafletGeosearch)
//     .component('vue-chessboard', chessboard)
//     .component('chess-component', require('./components/Chess.vue').default)
//     .mount('#app');
//
