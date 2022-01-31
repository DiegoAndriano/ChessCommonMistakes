<template>
    <div>
        <chessboard />
    </div>
</template>

<script>
import {chessboard} from 'vue-chessboard'
import 'vue-chessboard/dist/vue-chessboard.css'

export default {
    components:{
        chessboard
    },
}
</script>
