<template>
    <div>
        <sync-account @synced="handleSync"/>

        <div class="">
            <!--     text found games       -->
            <div class="flex justify-center items-center py-5">
                <p v-if="( itHasWorsePlays ) && (sync > 0)" class="font-bold block">We found these repeated
                    mistakes!</p>
            </div>

            <!--     access to lichess games       -->
            <div class="py-4 w-full flex overflow-x-scroll">
                <div
                    style="min-width: 244px;" v-if="worsePlay.repetition >= repetitionThreshold"
                    v-for="worsePlay in worsePlays"
                    class="mr-3 border border-4 border-black  items-center bg-[#F07F8A]">

                    <button @click="moveFromLeftTab(worsePlay)" class="hover:bg-[#E41B2E] hover:text-white transition ease-in duration-100 px-4 pt-6 w-full bg-[#F07F8A] pb-2">
                        <span class="font-bold">{{ worsePlay.name }}</span>
                        <span>|</span>
                        <span class="font-bold">ΔE: {{ worsePlay.deltaScore }}</span>
                        <span>|</span>
                        <span>{{ worsePlay.repetition }} games</span>
                    </button>

                    <div class="w-full bg-black h-1"></div>

                    <hoverable :worse-play-url="worsePlay.site_url.split('!')"/>

                </div>
            </div>

            <!--    text didn't found games        -->
            <div class="flex justify-center items-center py-5" v-if="(! itHasWorsePlays ) && (sync > 0)">
                <p class="font-bold underlined">No errors with configured repetitions have been found. Try with more
                    games, or analyze more games on Lichess!</p>
            </div>

            <!--    movements box + delta errores + tablero    -->
            <div class="w-full flex flex-col justify-center items-center md:flex-row md:items-start mt-8">

                <!--     movements box           -->
                <div class="w-full md:w-1/3 bg-light flex flex-col items-center justify-center">
                    <!--     tablero           -->
                    <div class="w-full md:w-2/3 flex justify-center">
                        <board id="board" :fen="this.selectedFen" :orientation="color"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MovementsBox from './MovementsBox'
import SyncAccount from './SyncAccount'
import Tree from './Tree'
import board from './board'
import Hoverable from './Hoverable'
import 'vue-chessboard/dist/vue-chessboard.css'
import {EventBus} from '../app';

export default {
    data() {
        return {
            selectedFen: '',
            movementMatrix: [],
            worsePlays: [],
            sync: 0,
            repetitionThreshold: 2,
            played: [],
            itHasWorsePlays: false,
            color: "white"
        }
    },
    components: {
        board,
        'movements-box': MovementsBox,
        'sync-account': SyncAccount,
        'tree': Tree,
        'hoverable': Hoverable,
    },
    mounted() {
        this.movementMatrix = new Object();
        this.movementMatrix.movements = new Object();
        EventBus.$on('clickeado', function (val) {

            // this.played.push(val[1]);

            this.selectedFen = val[0].fen;

            this.played = val[2];

        }.bind(this));

        // document.querySelector('#chessboaord').game.moves.threats.push({orig: 'a1', brush: 'yellow'})
    },
    methods: {
        handleSync(receivedMatrix) {

            this.movementMatrix = receivedMatrix[0];
            this.worsePlays = receivedMatrix[1];
            this.repetitionThreshold = parseInt(receivedMatrix[2]);
            this.sync++;
            this.itHasWorsePlays = false;

            for (var i = 0; i < this.worsePlays.length; i++) {
                this.itHasWorsePlays = this.itHasWorsePlays || (this.worsePlays[i].repetition >= this.repetitionThreshold)
            }
        },
        moveFromLeftTab(val) {

            if (val.site_url.includes("black")) {
                this.color = "black"
            } else {
                this.color = "white"
            }

            this.selectedFen = val.fen
        },
    }

}
</script>
