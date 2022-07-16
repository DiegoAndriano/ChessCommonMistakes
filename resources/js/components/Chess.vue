<template>
    <div ref="mainContainer" class="md:flex">
        <div class="w-full">
            <p class="text-center mb-4 pt-4">Get your <span
                class="highlight"> most common mistakes</span> in the openings
                given <span class="font-bold">a number of Lichess games.</span></p>

            <sync-account @synced="handleSync"/>

        </div>

        <div
            class="w-full md:w-1/2"
            v-show="synced">
            <!--     text found games       -->
            <div class="flex justify-center items-center py-5">
                <p v-if="( itHasWorsePlays ) && (sync > 0)" class="font-bold block">We found these repeated
                    mistakes!</p>
            </div>

            <!--     access to lichess games       -->
            <div class="py-4 w-full flex overflow-x-scroll">
                <div
                    style="min-width: 244px;" v-if="worsePlay.repetition >= repetitionThreshold"
                    v-for="worsePlay in worsePlays"
                    class="mr-3 border border-4 border-black  items-center bg-[#F16B6C]">

                    <button @click="moveFromLeftTab(worsePlay)"
                            class="hover:bg-[#F07F8A] hover:text-white transition ease-in duration-100 px-4 pt-6 w-full bg-[#F16B6C] pb-2">
                        <span class="font-bold">{{ worsePlay.name }}</span>
                        <span>|</span>
                        <span class="font-bold">ΔE: {{ worsePlay.deltaScore }}</span>
                        <span>|</span>
                        <span>{{ worsePlay.repetition }} games</span>
                    </button>

                    <div class="w-full bg-black h-1"></div>

                    <hoverable :worse-play-url="worsePlay.site_url.split('!')"/>

                </div>
            </div>

            <!--    text didn't found games        -->
            <div class="flex justify-center items-center py-5 2.5xl:h-[156px]" v-if="(! itHasWorsePlays ) && (sync > 0)">
                <p class="font-bold underlined">No errors with configured repetitions have been found. Try with more
                    games, or analyze more games on Lichess!</p>
            </div>

            <!--    tablero    -->
            <div  v-if="( itHasWorsePlays )" class="2.5xl:flex 2.5xl:justify-even 2.5xl:space-x-3 3xl:space-x-5">
                <div class="flex justify-center items-center ">
                    <board class="" id="board" :fen="this.selectedFen" :orientation="color"/>
                </div>
                <div>
                    <h2 class="font-bold text-xl flex items-center">
                    <span class="pr-3">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <title>What am i looking at?</title>
                            <desc>Question mark inside red circle.</desc>
                            <path
                                d="M37.5563 22.786C37.3333 31.0519 30.4524 37.5716 22.188 37.3486C13.9233 37.1255 7.40414 30.2441 7.62726 21.9782C7.85037 13.7122 14.7313 7.19252 22.9959 7.41559C31.2604 7.63869 37.7796 14.5201 37.5563 22.786Z"
                                stroke="#F16B6C" stroke-width="4"/>
                            <path
                                d="M36.8213 22.7664C36.6092 30.6225 30.0682 36.822 22.2078 36.6099C14.3474 36.3979 8.15035 29.8542 8.36238 21.9982C8.57444 14.1423 15.1154 7.94252 22.9759 8.1547C30.8364 8.36688 37.0334 14.9104 36.8213 22.7664Z"
                                fill="#F16B6C" stroke="#F4F4F4" stroke-width="3"/>
                            <path
                                d="M20.2543 27.2712V25.8138C20.2543 24.897 20.3643 24.1362 20.5843 23.5312C20.8226 22.9079 21.116 22.3762 21.4643 21.9362C21.831 21.4962 22.1976 21.102 22.5643 20.7537C23.0593 20.2954 23.4993 19.8462 23.8844 19.4062C24.2693 18.9479 24.4617 18.352 24.4617 17.6187C24.4617 17.2154 24.361 16.8762 24.1593 16.6012C23.9576 16.3262 23.71 16.1154 23.4168 15.9687C23.1418 15.8037 22.8668 15.7212 22.5918 15.7212C22.0601 15.7212 21.611 15.8495 21.2443 16.1062C20.896 16.3445 20.6026 16.6562 20.3643 17.0412C20.1443 17.4262 19.9518 17.8295 19.7868 18.2512L16.6243 16.7662C16.7343 16.4362 16.9268 16.0145 17.2018 15.5012C17.4768 14.9879 17.8618 14.4745 18.3568 13.9612C18.8701 13.4479 19.5026 13.0171 20.2543 12.6687C21.0243 12.3204 21.941 12.1462 23.0043 12.1462C24.0493 12.1462 24.9844 12.3296 25.8093 12.6962C26.6527 13.0446 27.3217 13.5946 27.8168 14.3462C28.3117 15.0795 28.5593 16.0512 28.5593 17.2612C28.5593 18.2695 28.4217 19.0854 28.1468 19.7087C27.8717 20.332 27.5327 20.8637 27.1293 21.3037C26.7261 21.7254 26.3227 22.147 25.9193 22.5687C25.6076 22.8804 25.3051 23.2287 25.0117 23.6137C24.7368 23.9805 24.5168 24.4112 24.3517 24.9061C24.1868 25.4013 24.1044 25.997 24.1044 26.6938V27.2712H20.2543ZM22.1793 33.0738C21.5193 33.0738 20.9785 32.8995 20.5568 32.5512C20.1351 32.1845 19.9243 31.708 19.9243 31.1213C19.9243 30.553 20.1351 30.0762 20.5568 29.6912C20.9968 29.3061 21.5376 29.1138 22.1793 29.1138C22.821 29.1138 23.3435 29.3061 23.7468 29.6912C24.1685 30.0762 24.3793 30.553 24.3793 31.1213C24.3793 31.708 24.1776 32.1845 23.7744 32.5512C23.371 32.8995 22.8393 33.0738 22.1793 33.0738Z"
                                fill="#F4F4F4"/>
                        </svg>

                    </span>
                        What am I looking at?
                    </h2>
                    <p class="my-2 ">A working open-source analyzing tool, to check which mistakes any given <span
                        class="font-bold">Lichess user</span> repeats mutiple times.
                        The goal is <span
                            class="font-bold">to be aware of the positions you may repeat in any game</span>,
                        and
                        then know that you repeated the same mistakes
                        in the same position a determined amount of times and <span class="underline">how to get better on those positions going to the
                            lichess board and studying the game.</span></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MovementsBox from './MovementsBox'
import SyncAccount from './SyncAccount'
import Tree from './Tree'
import board from './board'
import Hoverable from './Hoverable'
import 'vue-chessboard/dist/vue-chessboard.css'
import {EventBus} from '../app';
import {Elastic, gsap} from "gsap";

export default {
    data() {
        return {
            synced: false,
            selectedFen: '',
            movementMatrix: [],
            worsePlays: [],
            sync: 0,
            repetitionThreshold: 2,
            played: [],
            itHasWorsePlays: false,
            color: "white"
        }
    },
    components: {
        board,
        'movements-box': MovementsBox,
        'sync-account': SyncAccount,
        'tree': Tree,
        'hoverable': Hoverable,
    },
    mounted() {
        this.movementMatrix = new Object();
        this.movementMatrix.movements = new Object();
        EventBus.$on('clickeado', function (val) {

            // this.played.push(val[1]);

            this.selectedFen = val[0].fen;

            this.played = val[2];

        }.bind(this));

        // document.querySelector('#chessboaord').game.moves.threats.push({orig: 'a1', brush: 'yellow'})
    },
    methods: {
        handleSync(receivedMatrix) {
            this.synced = true;

            this.movementMatrix = receivedMatrix[0];
            this.worsePlays = receivedMatrix[1];
            this.repetitionThreshold = parseInt(receivedMatrix[2]);
            this.sync++;
            this.itHasWorsePlays = false;

            for (var i = 0; i < this.worsePlays.length; i++) {
                this.itHasWorsePlays = this.itHasWorsePlays || (this.worsePlays[i].repetition >= this.repetitionThreshold)
            }

            this.moveFromLeftTab(this.worsePlays[0])

        },
        moveFromLeftTab(val) {

            if (val.site_url.includes("black")) {
                this.color = "black"
            } else {
                this.color = "white"
            }

            this.selectedFen = val.fen
        },
    }

}
</script>
