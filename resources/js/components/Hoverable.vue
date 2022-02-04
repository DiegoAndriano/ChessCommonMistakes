<template>
    <div style="margin: 0px;" class="">
        <button class="w-full" @click="showGames = !showGames">
            <button class="w-full border border-2 bg-gray-100 hover:bg-green-500 hover:text-white transition ease-in duration-100">Show lichess games</button>
            <div class="shadow-xl bg-white rounded-lg h-auto mx-auto w-56 z-10 relative py-6 border border-2"
                 v-if="showGames">
                <a v-for="(url, index) in worsePlayUrl" :href="url" target="_blank" class="block w-auto h-5 underline">
                    Lichess game <span class="font-bold">#{{ index }} </span>
                </a>
            </div>
        </button>
    </div>
</template>

<script>
export default {
    props: {
        worsePlayUrl: Array
    },
    data() {
        return {
            showGames: false,
        }
    },
    mounted() {

    },
}
</script>
