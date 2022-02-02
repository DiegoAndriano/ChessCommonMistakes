<template>
    <div>
        <sync-account @synced="handleSync"/>

        <chessboard />
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
            console.log(movementMatrix)
        }
    }

}
</script>
