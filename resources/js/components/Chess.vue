<template>
    <div>
        <sync-account @synced="handleSync"/>
        <br>
        <div class="">
            <p v-if="( itHasWorsePlays ) && (sync > 0)" class="font-bold block">We found these repeated mistakes!</p>

            <div class="py-4 w-full flex overflow-x-scroll">
                <div  style="background-color: #ddd; padding:10px; border-radius:5px; min-width: 180px; margin-right:10px; " v-if="worsePlay.repetition >= repetitionThreshold"
                     v-for="worsePlay in worsePlays" class="px-1 space-x-4 items-center">

                    <button @click="moveFromLeftTab(worsePlay)" class="space-x-3 border border-2 bg-gray-100 mb-2 px-3 hover:bg-green-500 hover:text-white transition ease-in duration-100">
                        <span class="font-bold">{{ worsePlay.name }}</span> | ΔE: {{ worsePlay.deltaScore }} |
                        {{ worsePlay.repetition }} games
                    </button>

                    <hoverable :worse-play-url="worsePlay.site_url.split('!')"/>

                </div>
            </div>
            <div v-if="(! itHasWorsePlays ) && (sync > 0)">
                <p class="font-bold underlined">No errors with configured repetitions have been found. Try with more
                    games, or analyze more games on Lichess!</p>
            </div>
            <div class="flex items-start mt-8">
                <div class="grid grid-cols-2 mx-4">
                    <movements-box class="cursor-pointer" v-for="(move, index) in played" :key="index">
                        <button @click="moveFromLeftTab(move)">
                            <span class="font-bold">{{ move.name }}</span> | <span class="font-bold">E:</span>
                            {{ move.score }} | <span class="font-bold">ΔE:</span> {{ move.deltaScore }}
                        </button>
                    </movements-box>
                </div>
                <div class="w-full md:w-2/3">
                    <board id="board" :fen="this.selectedFen"/>
                </div>
                <div class="w-full md:w-1/3 bg-light">
                    <span class="font-bold">Movements</span>
                    <div style="height: 400px;width:250px; ;overflow-y:scroll;">
                        <div
                            class="border border-3 border-gray-500 bg-gray-200"
                            v-for="(value, name) in movementMatrix.movements" :key="name + value.score">
                            <tree :story-received="[]" :name="name" :moves="value" :depth="1"/>
                        </div>
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
            this.selectedFen = val.fen
        },
    }

}
</script>
