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
    mounted() {
        var Chess = require('chess.js/chess.js');
        var chessGame = new Chess();
        console.log(chessGame);
    },

}
</script>
