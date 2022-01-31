<template>
    <div>
        <h2>Play here</h2>
        <chessboard></chessboard>
    </div>
</template>

<script>

    import {chessboard} from 'vue-chessboard'

    export default {
        data() {
            return {
                data: '',
            }
        },

    }
</script>
