<template>
    <div>
        <sync-account @synced="handleSync"/>
        <br>
        <div class="">
            <div class="w-full flex overflow-x-scroll">
                <div v-if="worsePlay.repetition >= repetitionThreshold" v-for="worsePlay in worsePlays">
                    <div>
                        <button @click="moveFromLeftTab(worsePlay)" class="space-x-3">
                            <span class="font-bold">{{ worsePlay.name }}</span> | {{ worsePlay.deltaScore }} |
                            #{{ worsePlay.repetition }}
                        </button>
                    </div>
                    <button>
                        <a v-for="(link, index) in (worsePlay.site_url.split('!'))" :key="index" :href="link" target="_blank">
                            Lichess game #{{index}}
                        </a>
                    </button>
                </div>
                <!--                <div v-else>-->
                <!--                    <p>No errors with more than 1 repetition found</p>-->
                <!--                </div>-->
            </div>
            <div class="flex">
                <div class="grid grid-cols-2 mx-4 gap-2">
                    <movements-box class="cursor-pointer" v-for="(move, index) in played" :key="index">
                        <button @click="moveFromLeftTab(move)">
                            {{ move.name }} | {{ move.score }} |d {{ move.deltaScore }}
                        </button>
                    </movements-box>
                </div>
                <div class="w-full md:w-2/3">
                    <board id="board" :fen="this.selectedFen"/>
                </div>
                <div class="w-full md:w-1/3 bg-light">
                    Movements <p>{{ this.sync }}</p> | {{ movementMatrix.movements.length }}
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
import 'vue-chessboard/dist/vue-chessboard.css'
import {EventBus} from '../app';

export default {
    data() {
        return {
            selectedFen: '',
            movementMatrix: [],
            worsePlays: [],
            sync: 0,
            repetitionThreshold : 2,
            played: [],
        }
    },
    components: {
        board,
        'movements-box': MovementsBox,
        'sync-account': SyncAccount,
        'tree': Tree,
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
        },
        moveFromLeftTab(val) {
            this.selectedFen = val.fen
        }
    }

}
</script>
