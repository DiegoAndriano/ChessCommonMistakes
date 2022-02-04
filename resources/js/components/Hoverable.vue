<template>
    <div>
        <button @click="showGames = !showGames">
            <p>Show lichess games</p>
            <div class="shadow-xl bg-white rounded-lg h-auto mx-auto w-56 z-10 relative py-6 border border-2"
                 v-if="showGames">
                <a v-for="(url, index) in worsePlayUrl" :href="url" target="_blank" class="block w-full h-5 underline">
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
