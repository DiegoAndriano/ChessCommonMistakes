
import { createApp } from 'vue'
import LeafletGeosearch from './components/LeafletGeosearch.vue';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = createApp({});
app
    .component('leaflet-geosearch', LeafletGeosearch)
    .mount('#app');

require('./bootstrap');
