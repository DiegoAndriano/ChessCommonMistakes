<template>
    <div>
        <sync-account @synced="handleSync"/>
        <br>
        <div class="md:flex">
            <div class="w-full md:w-2/3">
                <chessboard />
            </div>
            <div class="w-full md:w-1/3 bg-light">
                Movements
            </div>
        </div>
    </div>
</template>

<script>
import SyncAccount from './SyncAccount'
import {chessboard} from 'vue-chessboard'
import 'vue-chessboard/dist/vue-chessboard.css'

export default {
    components:{
        chessboard,
        'sync-account': SyncAccount,
    },
    mounted() {

    },
    methods: {
        handleSync(movementMatrix){
            console.log("recibido");
            console.log(movementMatrix)
        }
    }

}
</script>
