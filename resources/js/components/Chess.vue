<template>
    <div>
        <sync-account />

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

}
</script>
