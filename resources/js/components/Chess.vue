<template>
    <div>
        <sync-account @synced="handleSync"/>
        <br>
        <div class="md:flex">
            <div class="w-full md:w-2/3">
                <chessboard :fen="selectedFen" />
            </div>
            <div class="w-full md:w-1/3 bg-light">
                Movements <p>{{this.sync}}</p> | {{movementMatrix.length}}
                <div v-for="(value, name) in movementMatrix">
                    <button onclick="changeBoard(value.fen)">Movement {{name}} {{value.score}}</button>
                    <br>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SyncAccount from './SyncAccount'
import {chessboard} from 'vue-chessboard'
import 'vue-chessboard/dist/vue-chessboard.css'

export default {
    data(){
        return {
            selectedFen : '',
            movementMatrix : [],
            sync : 0,
        }
    },
    components:{
        chessboard,
        'sync-account': SyncAccount,
    },
    mounted() {

    },
    methods: {
        changeBoard(fen) {
            this.selectedFen = fen;
        },
        handleSync(movementMatrix){
            console.log("recibido");
            console.log(movementMatrix)
            this.movementMatrix = movementMatrix;
            this.sync++;


        }
    }

}
</script>
