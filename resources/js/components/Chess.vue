<template>
    <div>
        <h2>Play here</h2>
        <chessboard></chessboard>
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
