<template>
    <div>
        <sync-account @synced="handleSync"/>
        <br>
        <div class="md:flex">
            <div class="w-full md:w-2/3">
                <board id="board" :fen="this.selectedFen"/>
            </div>
            <div class="w-full md:w-1/3 bg-light">
                Movements <p>{{ this.sync }}</p> | {{ movementMatrix.movements.length }}
                <div style="height: 400px;width:300px; ;overflow-y:scroll;">
                    <div
                        class="border border-3 border-gray-500 bg-gray-200"
                        v-for="(value, name) in movementMatrix.movements" :key="name + value.score">
                        <tree :name="name" :moves="value" :depth="1"/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
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
            sync: 0,
        }
    },
    components: {
        board,
        'sync-account': SyncAccount,
        'tree': Tree,
    },
    mounted() {
        this.movementMatrix = new Object();
        this.movementMatrix.movements = new Object();
        EventBus.$on('clickeado', function (val) {
            this.selectedFen = val.fen;
        }.bind(this));

        // document.querySelector('#chessboaord').game.moves.threats.push({orig: 'a1', brush: 'yellow'})
    },
    methods: {
        handleSync(receivedMatrix) {
            this.movementMatrix = receivedMatrix;
            this.sync++;
        }
    }

}
</script>
