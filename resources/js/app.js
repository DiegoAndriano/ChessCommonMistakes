
import { createApp } from 'vue'
import LeafletGeosearch from './components/LeafletGeosearch.vue';

const app = createApp({});
app
    .component('leaflet-geosearch', LeafletGeosearch)
    .mount('#app');

require('./bootstrap');
