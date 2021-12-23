<template>
    <div class="mx-10 my-4">
        <input
            style="outline:none;"
            v-model.trim="geosearch"
            v-on:keyup="autocomplete"
            class="w-1/3 transition ease-in-out duration-250 pr-4 pl-4 border border-gray-200 bg-gray-50 focus:bg-white focus:px-6 mr-4 py-2"
            placeholder="Geosearch"
            id="geosearch"
            type="text">

        <transition  name="autocomplete">
            <div class="autocomplete-container"
                v-if="results.length">
                <ul class="autocomplete-ul">
                    <li class="autocomplete-li"
                        v-on:click="update(result)"
                        v-for="result in results">
                        {{ result }}
                    </li>
                </ul>
            </div>
        </transition>
    </div>
</template>

<script>
import {OpenStreetMapProvider} from 'leaflet-geosearch';

export default {
    data() {
        return {
            geosearch: '',
            response: [],
            errores: {},
            results: [],
            onQuery: false,
            provider: new OpenStreetMapProvider({
                params: {
                    limit: 5
                }}),

        }
    },
    mounted() {
    },
    methods: {
        async autocomplete() {
            if(event.keyCode === 27) {
                this.results = []
                return
            }
            if(this.onQuery){
                return
            }
            if (this.geosearch.length > 2) {
                this.onQuery = true;
                document.addEventListener('click', this.closeIfClickedOutside);
                this.results = [];
                await this.provider.search({query: this.geosearch}).then(function (val) {
                    this.response = val
                    val.map((item) => {
                        this.results.push(item.label)
                        this.onQuery = false
                    })
                }.bind(this));
            }
        },
        closeIfClickedOutside(event) {
            if (!event.target.closest('#main')) {
                this.results = []
                document.removeEventListener('click', this.closeIfClickedOutside);
            }
        },
        update(result) {
            this.geosearch = result
            this.results = []
        },
    }
}
</script>
