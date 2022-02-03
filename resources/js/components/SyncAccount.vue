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
                account: "DiegoAndriano",
                chessGames: [],
                chessGamesParsed: [],
                movementMatrix:{},
            }
        },
        methods: {
            getGames() {
                axios
                    .get('https://lichess.org/api/games/user/' + this.account + '?color=white&max=20&analysed=true&evals=true&perfType=ultraBullet,bullet,blitz,rapid,classical,correspondence"')
                    .then(response => {

                        console.log(response)
                        this.chessGames = response.data;
                        this.chessGames = this.chessGames.split("\n\n");
                        this.chessGamesParsed = [];
                        this.movementMatrix = {};
                        this.movementMatrix.movements = new Object();
                        this.movementMatrix.score = 0;
                        this.movementMatrix.repetition = 1;
                        this.movementMatrix.fen = 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1';

                        for(var i=1; i<this.chessGames.length; i+=2) {
                            this.chessGames[i] = this.chessGames[i].replaceAll('[%eval','');
                            this.chessGames[i] = this.chessGames[i].replaceAll(']','');
                            this.chessGames[i] = this.chessGames[i].replaceAll('{','');
                            this.chessGames[i] = this.chessGames[i].replaceAll('}','');
                            this.chessGames[i] = this.chessGames[i].replaceAll('  ',' ');
                            this.chessGames[i] = this.chessGames[i].replaceAll('  ',' ');
                            this.chessGamesParsed.push(this.chessGames[i]);
                        }


                        for(var i=0; i<this.chessGamesParsed.length; i++) {
                            var gameMovement = this.chessGamesParsed[i].split(' ');
                            console.log(gameMovement)
                            var currentNode = this.movementMatrix;

                            var Chess = require('chess.js/chess.js');
                            var chessGame = new Chess();



                            for (var j=0; j<gameMovement.length-1; j+=3) {
                                if (currentNode.movements == null) {
                                    currentNode.movements = new Object();
                                }

                                if (Object.keys(currentNode.movements).includes(gameMovement[j+1])) {
                                    chessGame.move(gameMovement[j+1]);
                                    currentNode.movements[gameMovement[j+1]].repetition ++
                                }
                                else {
                                    currentNode.movements[gameMovement[j+1]] = new Object();
                                    currentNode.movements[gameMovement[j+1]].score = gameMovement[j+2];
                                    currentNode.movements[gameMovement[j+1]].repetition = 1;
                                    chessGame.move(gameMovement[j+1]);
                                    currentNode.movements[gameMovement[j+1]].fen = chessGame.fen();

                                }
                                currentNode = currentNode.movements[gameMovement[j+1]];

                                // if (Object.keys(currentNode).includes(gameMovement[j+1])) {
                                //     chessGame.move(currentNode[gameMovement[j+1]]);
                                //     currentNode[gameMovement[j+1]].repetition ++
                                // }
                                // else {
                                //     currentNode[gameMovement[j+1]] = new Object();
                                //     currentNode[gameMovement[j+1]].score = gameMovement[j+2];
                                //     currentNode[gameMovement[j+1]].repetition = 0;
                                //     currentNode[gameMovement[j+1]].movements = ;
                                //     chessGame.move(gameMovement[j+1]);
                                //     currentNode[gameMovement[j+1]].fen = chessGame.fen();
                                //
                                // }
                                // currentNode = currentNode[gameMovement[j+1]];
                            }

                            console.log("narf");
                            console.log(this.movementMatrix)
                        }

//                        console.log(this.movementMatrix)
//                        console.log(JSON.stringify(this.movementMatrix))
                        this.$emit('synced', this.movementMatrix)

                    })

            }
        }
        ,
    }
</script>
