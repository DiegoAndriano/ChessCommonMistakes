import devtools from '@vue/devtools'
import { createApp } from 'vue'
import LeafletGeosearch from './components/LeafletGeosearch.vue';
import {chessboard} from 'vue-chessboard'
import 'vue-chessboard/dist/vue-chessboard.css'


window.Vue = require('vue');

const app = createApp({});
app
    .component('leaflet-geosearch', LeafletGeosearch)
    .component('vue-chessboard', chessboard)
    .component('chess-component', require('./components/Chess.vue').default)
    .mount('#app');

require('./bootstrap');
