<template>
    <div style="margin: 0px;" class="">
        <button class="w-full" @click="showGames = !showGames">
            <button class="py-4 w-full bg-[#F07F8A] hover:bg-[#E41B2E] hover:text-white transition ease-in duration-100">Show lichess games</button>
            <div class="shadow-xl bg-white rounded-lg h-auto mx-auto w-56 z-10 relative py-6 border border-2 my-2"
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
