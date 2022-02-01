<template>
    <div>
        <label class="block" for="account">Select account</label>
        <div class="mb-4">
            <input
                v-model="account"
                id="account" type="text"
                placeholder="Account"
                class="border transition ease-in-out focus:pl-4 pl-2 ">
            <button @click="getGames">Go!</button>
        </div>

    </div>
</template>

<script>

    import '../classes.js';


    export default {
        data() {
            return {
                account: "",
                chessGames: [],
                chessGamesParsed: [],
                movementMatrix:[[]],
            }
        },
        methods: {
            getGames() {
                axios
                    .get('https://lichess.org/api/games/user/' + this.account + '?max=3&evals=true')
                    .then(response => {
                        // var Chess = require('chess.js/chess.js');
                        // var chessGame = new Chess();
                        // console.log(chessGame);

                        console.log(response)
                        this.chessGames = response.data;
                        this.chessGames = this.chessGames.split("\n\n");
                        this.chessGamesParsed = [];
                        for(var i=1; i<this.chessGames.length; i+=2) {
                            this.chessGames[i] = this.chessGames[i].replaceAll('{','');
                            this.chessGames[i] = this.chessGames[i].replaceAll('}','');
                            this.chessGamesParsed.push(this.chessGames[i]);
                        }

                        for(var i=0; i<this.chessGamesParsed.length; i++) {
                            console.log(i);
                            var gameMovement = [];

                            for (var j=0; j<gameMovement.length; j++) {
                                // if (this.movementMatrix)
                            }
                        }


                    })

            }
        }
        ,
    }
</script>
