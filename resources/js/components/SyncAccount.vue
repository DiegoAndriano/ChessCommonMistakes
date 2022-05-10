<template>
    <div>
        <label class="block" for="account">Select color</label>
        <div class="mb-4 flex justify-evenly">
            <div class="flex flex-col justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="36" height="36" fill="white" stroke="#333333" stroke-width="4"/>
                    <path d="M16.018 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.018 24.0495Z" fill="#333333"/>
                    <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="#333333"/>
                    <path d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784V20.2784Z" fill="#333333"/>
                    <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z" fill="#333333"/>
                    <path d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0136 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5377 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z" fill="#333333"/>
                </svg>


                <label for="white">White</label>
                <input type="radio" id="white" value="white" v-model="color">
            </div>
            <div class="flex flex-col justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="36" height="36" fill="#333333" stroke="white" stroke-width="4"/>
                    <g filter="url(#filter0_d_156_2)">
                        <path d="M16.0181 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.0181 24.0495Z" fill="white"/>
                        <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="white"/>
                        <path d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784Z" fill="white"/>
                        <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z" fill="white"/>
                        <path d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0137 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5378 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z" fill="white"/>
                    </g>
                    <defs>
                        <filter id="filter0_d_156_2" x="8" y="8" width="37" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="9" dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_156_2"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_156_2" result="shape"/>
                        </filter>
                    </defs>
                </svg>


                <label for="black">Black</label>
                <input type="radio" id="black" value="black" v-model="color">
            </div>
            <div class="flex flex-col justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="36" height="36" fill="#C4C4C4" stroke="#333333" stroke-width="4"/>
                    <path d="M16.018 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.018 24.0495Z" fill="#333333"/>
                    <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="#333333"/>
                    <path d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784Z" fill="#333333"/>
                    <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z" fill="#333333"/>
                    <path d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0137 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5378 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z" fill="#333333"/>
                    <mask id="mask0_156_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="8" y="8" width="24" height="24">
                        <path d="M16.018 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.018 24.0495Z" fill="white"/>
                        <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="white"/>
                        <path d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784Z" fill="white"/>
                        <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z" fill="white"/>
                        <path d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0137 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5378 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_156_2)">
                        <rect x="20" y="9.59998" width="8" height="16" fill="white"/>
                    </g>
                    <mask id="mask1_156_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                        <rect x="2" y="2" width="36" height="36" stroke="white" stroke-width="4"/>
                    </mask>
                    <g mask="url(#mask1_156_2)">
                        <rect x="20.8" width="23.2" height="40" fill="white"/>
                    </g>
                </svg>

                <label for="both">Both</label>
                <input class="accent-[#667080]" type="radio" id="both" value="both" v-model="color" checked>
            </div>

        </div>
        <label class="block" for="matches">Matches selected</label>
        <div class="mb-4">
            <input
                v-model="matches"
                id="matches"
                min="0"
                placeholder="200"
                type="number"
                @input="limitMaxMatchesValue"
                class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-1.5">
        </div>
        <label class="block" for="ignore_first_moves">How many first moves to ignore</label>
        <div class="mb-4">
            <input
                v-model="ignore_first_moves"
                id="ignore_first_moves"
                placeholder="3"
                min="0"
                type="number"
                class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-1.5">
        </div>
        <label class="block" for="error">Score lost to consider an error</label>
        <div class="mb-4">
            <input
                v-model="errorScoreThreshold"
                id="error"
                min="0"
                placeholder="0.5"
                type="number"
                class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-1.5">
        </div>
        <label class="block" for="account">Minimum times the error is repeated</label>
        <div class="mb-4">
            <input
                v-model="repetition"
                id="repetition"
                type="number"
                min="0"
                placeholder="2"
                class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-1.5">
        </div>
        <label class="block" for="account">Select account</label>
        <div class="flex mb-4 items-center">
            <input
                v-model="account"
                id="account" type="text"
                placeholder="Account"
                class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-1.5">
        </div>
        <div class="flex flex-col items-center w-full">
            <p
                @click="clearAccount"
                class="pb-2 text-blue-500 mx-4 cursor-pointer text-sm">clear values</p>

            <button
                v-if="! loading"
                class="bg-[#86A5D9] px-3 hover:bg-green-500 hover:text-white transition ease-in duration-100 uppercase w-36 h-12"
                @click="getGames">Go!
            </button>
            <div class="w-full flex justify-center">
                <div v-if="loading" id="loading"></div>
            </div>

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
            movementMatrix: {},
            worsePlays: [],
            color: 'both',
            ignore_first_moves: 6,
            matches: 1,
            repetition: 1,
            errorScoreThreshold: 0.1,
            loading: false,
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
        clearAccount() {
            this.account = "";
        },
        async getGames() {
            this.loading = true
            this.chessGames = []
            this.chessGamesParsed = []
            this.movementMatrix = {}
            this.worsePlays = []

            await axios
                .get('https://lichess.org/api/games/user/' + this.account + '?' + (this.color === 'both' ? '' : 'color=' + this.color + '&') + 'max=' + this.matches + '&analysed=true&evals=true&perfType=ultraBullet,bullet,blitz,rapid,classical,correspondence"')
                .then(response => {

                    this.chessGames = response.data;
                    this.chessGames = this.chessGames.split("\n\n");
                    this.chessGamesParsed = [];
                    this.movementMatrix = {};
                    this.movementMatrix.movements = new Object();
                    this.movementMatrix.score = 0;
                    this.movementMatrix.repetition = 1;
                    this.movementMatrix.fen = 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1';

                    for (var i = 1; i < this.chessGames.length; i += 2) {
                        var site_url = this.chessGames[i - 1].substring(this.chessGames[i - 1].indexOf('[Site '), 100);
                        site_url = site_url.substring(0, site_url.indexOf('\"]'));
                        site_url = site_url.substring(7, site_url.length);

                        var current_color = this.chessGames[i - 1].substring(this.chessGames[i - 1].indexOf('[White '), this.chessGames[i - 1].indexOf('[Black '));
                        current_color = current_color.includes(this.account) ? "white" : "black";
                        this.chessGames[i] = this.chessGames[i].replaceAll('[%eval', '');
                        this.chessGames[i] = this.chessGames[i].replaceAll(']', '');
                        this.chessGames[i] = this.chessGames[i].replaceAll('{', '');
                        this.chessGames[i] = this.chessGames[i].replaceAll('}', '');
                        this.chessGames[i] = this.chessGames[i].replaceAll('  ', ' ');
                        this.chessGames[i] = this.chessGames[i].replaceAll('  ', ' ');

                        this.chessGames[i] = this.chessGames[i] + " " + site_url + "!" + current_color;
                        this.chessGamesParsed.push(this.chessGames[i]);
                    }


                    for (var i = 0; i < this.chessGamesParsed.length; i++) {
                        var gameMovement = this.chessGamesParsed[i].split(' ');
                        var currentNode = this.movementMatrix;

                        var Chess = require('chess.js/chess.js');
                        var chessGame = new Chess();

                        var previousScore = 0;
                        var currentWorstPlay = 0;
                        var color = gameMovement[gameMovement.length - 1].split('!')[1];
                        var site_url = gameMovement[gameMovement.length - 1].split('!')[0];
                        var currentMove = 0;
                        for (var j = 0; j < gameMovement.length - 1; j += 3) {
                            currentMove++;
                            if (currentNode.movements == null) {
                                currentNode.movements = new Object();
                            }

                            if (Object.keys(currentNode.movements).includes(gameMovement[j + 1])) {
                                chessGame.move(gameMovement[j + 1]);
                                currentNode.movements[gameMovement[j + 1]].repetition++
                                currentNode.movements[gameMovement[j + 1]].deltaRepetition = currentNode.movements[gameMovement[j + 1]].repetition * (Math.round((gameMovement[j + 2] - previousScore) * 100) / 100);
                                currentNode.movements[gameMovement[j + 1]].site_url = currentNode.movements[gameMovement[j + 1]].site_url + "!" + site_url + "/" + color + "/#" + currentMove;
                            } else {
                                currentNode.movements[gameMovement[j + 1]] = new Object();
                                currentNode.movements[gameMovement[j + 1]].score = gameMovement[j + 2];
                                currentNode.movements[gameMovement[j + 1]].deltaScore = Math.round((gameMovement[j + 2] - previousScore) * 100) / 100;
                                currentNode.movements[gameMovement[j + 1]].deltaRepetition = Math.round((gameMovement[j + 2] - previousScore) * 100) / 100;
                                currentNode.movements[gameMovement[j + 1]].name = gameMovement[j + 1];
                                currentNode.movements[gameMovement[j + 1]].moveNumber = currentMove;
                                currentNode.movements[gameMovement[j + 1]].site_url = site_url + "/" + color + "/#" + currentMove;
                                currentNode.movements[gameMovement[j + 1]].color = gameMovement[gameMovement.length - 1].split('!')[1];
                                currentNode.movements[gameMovement[j + 1]].repetition = 1;
                                chessGame.move(gameMovement[j + 1]);
                                currentNode.movements[gameMovement[j + 1]].fen = chessGame.fen();

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
                            previousScore = gameMovement[j + 2];
                            currentNode = currentNode.movements[gameMovement[j + 1]];

                        }

                    }

                    for (var i = 0; i < this.worsePlays.length; i++) {
                        for (var j = i + 1; j < this.worsePlays.length; j++) {
                            if (this.worsePlays[i].deltaScore * this.worsePlays[i].repetition > this.worsePlays[j].deltaScore * this.worsePlays[j].repetition) {
                                var temp = this.worsePlays[i];
                                this.worsePlays[i] = this.worsePlays[j];
                                this.worsePlays[j] = temp;
                            }
                        }
                    }


                    this.loading = false
                    this.$emit('synced', [this.movementMatrix, this.worsePlays, this.repetition])

                })

        }
    }
    ,
}
</script>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:100);

#loading {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 3px solid #86efac;
    border-radius: 50%;
    border-top-color: #15803d;
    animation: spin 1s ease-in-out infinite;
    -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
    to {
        -webkit-transform: rotate(360deg);
    }
}

@-webkit-keyframes spin {
    to {
        -webkit-transform: rotate(360deg);
    }
}
</style>
