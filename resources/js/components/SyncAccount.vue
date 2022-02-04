<template>
    <div>
        <label class="block" for="white">Select color</label>
        <div class="mb-4">
            <input type="radio" id="white" value="white" v-model="color">
            <label for="white">White</label>
            <br>
            <input type="radio" id="black" value="black" v-model="color">
            <label for="black">Black</label>
            <br>
            <input type="radio" id="both" value="both" v-model="color" selected>
            <label for="both">Both</label>
        </div>
        <label class="block" for="matches">Matches selected</label>
        <div class="mb-4">
            <input
                v-model="matches"
                id="matches"
                placeholder="200"
                @input="limitMaxMatchesValue"
                type="number"
                class="border transition ease-in-out focus:pl-4 pl-2 ">
        </div>
        <label class="block" for="error">Score lost to consider an error</label>
        <div class="mb-4">
            <input
                v-model="errorScoreThreshold"
                id="error"
                placeholder="0.5"
                type="number"
                class="border transition ease-in-out focus:pl-4 pl-2 ">
        </div>
        <label class="block" for="account">Minimum times the error is repeated</label>
        <div class="mb-4">
            <input
                v-model="repetition"
                id="repetition"
                type="number"
                placeholder="2"
                class="border transition ease-in-out focus:pl-4 pl-2 ">
        </div>
        <label class="block" for="ignore_first_moves">How many first moves to ignore</label>
        <div class="mb-4">
            <input
                v-model="ignore_first_moves"
                id="ignore_first_moves"
                placeholder="3"
                type="number"
                class="border transition ease-in-out focus:pl-4 pl-2 ">
        </div>
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
                worsePlays:[],
                color:'white',
                ignore_first_moves:3,
                matches: 200,
                repetition: 2,
                errorScoreThreshold: 0.5,
            }
        },
        methods: {
            limitMaxMatchesValue(event) {
                const value = event.target.value
                if (this.matches >= 500) {
                    this.matches = 500
                }
                this.$forceUpdate()
            },
            async getGames() {
                await axios
                    .get('https://lichess.org/api/games/user/' + this.account + '?' + (this.color === 'both' ? '' : 'color=' + this.color + '&' )+ 'max='+ this.matches +'&analysed=true&evals=true&perfType=ultraBullet,bullet,blitz,rapid,classical,correspondence"')
                    .then(response => {

                        console.log(response.data)
                        this.chessGames = response.data;
                        this.chessGames = this.chessGames.split("\n\n");
                        this.chessGamesParsed = [];
                        this.movementMatrix = {};
                        this.movementMatrix.movements = new Object();
                        this.movementMatrix.score = 0;
                        this.movementMatrix.repetition = 1;
                        this.movementMatrix.fen = 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1';

                        for(var i=1; i<this.chessGames.length; i+=2) {
                            var site_url = this.chessGames[i-1].substring(this.chessGames[i-1].indexOf('[Site '), 100);
                            site_url = site_url.substring(0, site_url.indexOf('\"]'));
                            site_url = site_url.substring(7, site_url.length);

                            var current_color = this.chessGames[i-1].substring(this.chessGames[i-1].indexOf('[White '), this.chessGames[i-1].indexOf('[Black '));
                            current_color = current_color.includes(this.account) ? "white" : "black";
                            // console.log(site_url);
                            this.chessGames[i] = this.chessGames[i].replaceAll('[%eval','');
                            this.chessGames[i] = this.chessGames[i].replaceAll(']','');
                            this.chessGames[i] = this.chessGames[i].replaceAll('{','');
                            this.chessGames[i] = this.chessGames[i].replaceAll('}','');
                            this.chessGames[i] = this.chessGames[i].replaceAll('  ',' ');
                            this.chessGames[i] = this.chessGames[i].replaceAll('  ',' ');

                            this.chessGames[i] = this.chessGames[i] + " " + site_url+"!"+current_color;
                            this.chessGamesParsed.push(this.chessGames[i]);
                        }


                        for(var i=0; i<this.chessGamesParsed.length; i++) {
                            var gameMovement = this.chessGamesParsed[i].split(' ');
                            // console.log(gameMovement)
                            var currentNode = this.movementMatrix;

                            var Chess = require('chess.js/chess.js');
                            var chessGame = new Chess();

                            var previousScore = 0;
                            var currentWorstPlay = 0;
                            var color = gameMovement[gameMovement.length-1].split('!')[1];
                            var site_url = gameMovement[gameMovement.length-1].split('!')[0];
                            var currentMove = 0;
                            for (var j=0; j<gameMovement.length-1; j+=3) {
                                currentMove++;
                                if (currentNode.movements == null) {
                                    currentNode.movements = new Object();
                                }

                                if (Object.keys(currentNode.movements).includes(gameMovement[j+1])) {
                                    chessGame.move(gameMovement[j+1]);
                                    currentNode.movements[gameMovement[j+1]].repetition ++
                                    currentNode.movements[gameMovement[j+1]].deltaRepetition =  currentNode.movements[gameMovement[j+1]].repetition * (Math.round((gameMovement[j+2] - previousScore)*100)/100);
                                    currentNode.movements[gameMovement[j+1]].site_url = currentNode.movements[gameMovement[j+1]].site_url + "!" + site_url + "/" + color + "/#" + currentMove;
                                }
                                else {
                                    currentNode.movements[gameMovement[j+1]] = new Object();
                                    currentNode.movements[gameMovement[j+1]].score = gameMovement[j+2];
                                    currentNode.movements[gameMovement[j+1]].deltaScore = Math.round((gameMovement[j+2] - previousScore)*100)/100;
                                    currentNode.movements[gameMovement[j+1]].deltaRepetition =  Math.round((gameMovement[j+2] - previousScore)*100)/100;
                                    currentNode.movements[gameMovement[j+1]].name =gameMovement[j+1];
                                    currentNode.movements[gameMovement[j+1]].site_url = site_url+"/" + color + "/#" + currentMove;
                                    currentNode.movements[gameMovement[j+1]].color = gameMovement[gameMovement.length-1].split('!')[1];
                                    currentNode.movements[gameMovement[j+1]].repetition = 1;
                                    chessGame.move(gameMovement[j+1]);
                                    currentNode.movements[gameMovement[j+1]].fen = chessGame.fen();

                                    if (this.ignore_first_moves < currentMove) {
                                        if (currentNode.movements[gameMovement[j + 1]].color === "white") {
                                            if (-this.errorScoreThreshold >= currentNode.movements[gameMovement[j + 1]].deltaScore) {
                                                this.worsePlays.unshift(currentNode.movements[gameMovement[j + 1]]);
                                            }
                                        } else {
                                            if (this.errorScoreThreshold <= currentNode.movements[gameMovement[j + 1]].deltaScore) {
                                                this.worsePlays.unshift(currentNode.movements[gameMovement[j + 1]]);
                                            }
                                        }
                                    }

                                }
                                previousScore = gameMovement[j+2];
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

                            // console.log("narf");
                            // console.log(this.movementMatrix)
                        }

                        for (var i=0; i<this.worsePlays.length; i++) {
                            for (var j=i+1; j<this.worsePlays.length; j++) {
                                if (this.worsePlays[i].deltaScore * this.worsePlays[i].repetition > this.worsePlays[j].deltaScore * this.worsePlays[j].repetition) {
                                    var temp = this.worsePlays[i];
                                    this.worsePlays[i] = this.worsePlays[j];
                                    this.worsePlays[j] = temp;
                                }
                            }
                        }

//                        console.log(this.movementMatrix)
//                        console.log(JSON.stringify(this.movementMatrix))
                        this.$emit('synced', [this.movementMatrix, this.worsePlays, this.repetition])

                    })

            }
        }
        ,
    }
</script>
