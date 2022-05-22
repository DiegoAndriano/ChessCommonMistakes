<template>
    <transition>
        <div
            ref="syncContainer"
            :class="mdClasses ? 'md:flex md:flex-col md:justify-center md:items-center' : ''"
            class="w-full">

            <div
                :class="mdClasses ? 'md:w-full md:flex md:justify-evenly md:items-center md:px-16' : ''"
                class="mb-4 pt-2">
                <label class="block" for="account">Select color</label>

                <div
                    :class="mdClasses ? 'md:w-2/3' : ''"
                    class="flex justify-evenly items-center">
                    <div class="flex flex-col justify-center">
                        <input type="radio" class="hidden" id="white" value="white" v-model="color">
                        <label for="white">
                            <div :class="color === 'white' ? 'border border-4 border-[#86A5D9]' : ''">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="36" height="36" fill="white" stroke="#333333"
                                          stroke-width="4"/>
                                    <path
                                        d="M16.018 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.018 24.0495Z"
                                        fill="#333333"/>
                                    <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="#333333"/>
                                    <path
                                        d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784V20.2784Z"
                                        fill="#333333"/>
                                    <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z"
                                          fill="#333333"/>
                                    <path
                                        d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0136 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5377 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z"
                                        fill="#333333"/>
                                </svg>
                            </div>
                            White
                        </label>
                    </div>
                    <div class="flex flex-col justify-center">
                        <input class="hidden" type="radio" id="black" value="black" v-model="color">
                        <label for="black">
                            <div :class="color === 'black' ? 'border border-4 border-[#86A5D9]' : ''">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="36" height="36" fill="#333333" stroke="white"
                                          stroke-width="4"/>
                                    <g filter="url(#filter0_d_156_2)">
                                        <path
                                            d="M16.0181 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.0181 24.0495Z"
                                            fill="white"/>
                                        <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="white"/>
                                        <path
                                            d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784Z"
                                            fill="white"/>
                                        <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z"
                                              fill="white"/>
                                        <path
                                            d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0137 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5378 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z"
                                            fill="white"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_156_2" x="8" y="8" width="37" height="32"
                                                filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                           values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                           result="hardAlpha"/>
                                            <feOffset dx="9" dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix"
                                                           values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                     result="effect1_dropShadow_156_2"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_156_2"
                                                     result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            Black
                        </label>
                    </div>
                    <div class="flex flex-col justify-center">
                        <input type="radio" id="both" value="both" v-model="color" class="hidden" checked>
                        <label for="both">
                            <div :class="color === 'both' ? 'border border-4 border-[#86A5D9]' : ''">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="36" height="36" fill="#C4C4C4" stroke="#333333"
                                          stroke-width="4"/>
                                    <path
                                        d="M16.018 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.018 24.0495Z"
                                        fill="#333333"/>
                                    <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="#333333"/>
                                    <path
                                        d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784Z"
                                        fill="#333333"/>
                                    <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z"
                                          fill="#333333"/>
                                    <path
                                        d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0137 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5378 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z"
                                        fill="#333333"/>
                                    <mask id="mask0_156_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="8"
                                          y="8"
                                          width="24"
                                          height="24">
                                        <path
                                            d="M16.018 24.0495H23.9823V23.3986L22.3522 21.6744H17.6019L16.018 23.2584L16.018 24.0495Z"
                                            fill="white"/>
                                        <path d="M15.5281 24.702H24.4695V25.6792H15.5281V24.702Z" fill="white"/>
                                        <path
                                            d="M17.7344 20.2784H22.2656C22.4161 20.2784 22.5383 20.429 22.5383 20.5511V20.7969C22.5383 20.9474 22.4163 21.0695 22.2656 21.0695H17.7344C17.5839 21.0695 17.4617 20.919 17.4617 20.7969V20.5511C17.4617 20.4006 17.5837 20.2784 17.7344 20.2784Z"
                                            fill="white"/>
                                        <path d="M21.3978 14.6432H18.6022L18.0436 19.6716H21.9563L21.3978 14.6432Z"
                                              fill="white"/>
                                        <path
                                            d="M21.1194 13.3856C21.6353 13.0599 21.9837 12.5257 22.0737 11.9223C22.1638 11.319 21.9865 10.7062 21.5883 10.2441C21.19 9.78199 20.6101 9.51617 20.0001 9.51617C19.39 9.51617 18.8101 9.78202 18.4118 10.2441C18.0137 10.7062 17.8363 11.319 17.9265 11.9223C18.0165 12.5257 18.3648 13.0599 18.8807 13.3856H18.1128C17.9399 13.3856 17.7742 13.4542 17.6518 13.5762C17.5294 13.6982 17.4604 13.8638 17.4599 14.0365H22.5383C22.5378 13.8638 22.4688 13.6982 22.3465 13.5762C22.2241 13.4542 22.0583 13.3856 21.8855 13.3856H21.1194Z"
                                            fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_156_2)">
                                        <rect x="20" y="9.59998" width="8" height="16" fill="white"/>
                                    </g>
                                    <mask id="mask1_156_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                          y="0"
                                          width="40"
                                          height="40">
                                        <rect x="2" y="2" width="36" height="36" stroke="white" stroke-width="4"/>
                                    </mask>
                                    <g mask="url(#mask1_156_2)">
                                        <rect x="20.8" width="23.2" height="40" fill="white"/>
                                    </g>
                                </svg>
                            </div>
                            Both
                        </label>
                    </div>
                </div>


            </div>

            <div
                :class="mdClasses ? 'md:flex md:w-full md:px-16' : ''"
                class="mb-4">
                <div
                    :class="mdClasses ? ' md:w-1/2 md:px-4' : ''"
                    class="flex items-center relative">
                    <label class="block w-full" for="matches">Matches selected</label>
                    <tooltip tabindex=[0|-1] role="tooltip">
                        It uses <span class="font-bold">only analyzed games.</span> <br> <span
                        class="font-bold">Use > 50</span>
                        numbers of games
                    </tooltip>
                </div>

                <input
                    v-model="matches"
                    id="matches"
                    min="0"
                    placeholder="200"
                    type="number"
                    @input="limitMaxMatchesValue"
                    :class="mdClasses ? 'md:w-1/2' : ''"
                    class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-2">
            </div>

            <div
                :class="mdClasses ? 'md:flex md:w-full md:px-16' : ''"
                class="mb-4">
                <div
                    :class="mdClasses ? 'md:w-1/2 md:px-4' : ''"
                    class="flex items-center relative">
                    <label class="block w-full" for="ignore_first_moves">How many first moves to ignore</label>
                    <tooltip tabindex=[0|-1] role="tooltip">
                        <span class="font-bold">Ignore first 4 moves</span> <br>
                        <span class="italic font-light ">(meaning 2 for white and 2 for black)</span>
                    </tooltip>
                </div>

                <input
                    v-model="ignore_first_moves"
                    id="ignore_first_moves"
                    placeholder="3"
                    min="0"
                    type="number"
                    :class="mdClasses ? 'md:w-1/2' : ''"
                    class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-2">
            </div>

            <div
                :class="mdClasses ? 'md:flex md:w-full md:px-16' : ''"
                class="mb-4">

                <div
                    :class="mdClasses ? 'md:w-1/2 md:px-4' : ''"
                    class="flex items-center relative">
                    <label class="block w-full" for="error">Score lost to consider an error</label>
                    <tooltip tabindex=[0|-1] role="tooltip">
                        Means <span
                        class="font-bold">the score lost from the previous move to the actual move made.</span>
                        <br>
                        If the score is +3 after white moves, and black then moves and the score now is +6, then the
                        score
                        lost
                        is 3.
                    </tooltip>
                </div>
                <input
                    v-model="errorScoreThreshold"
                    id="error"
                    min="0"
                    placeholder="0.5"
                    type="number"
                    :class="mdClasses ? 'md:w-1/2' : ''"
                    class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-2">
            </div>

            <div
                :class="mdClasses ? 'md:flex md:w-full md:px-16' : ''"
                class="mb-4">
                <div
                    :class="mdClasses ? 'md:w-1/2 md:px-4' : ''"
                    class="flex items-center relative">
                    <label class="w-full block" for="account">Minimum times the error is repeated</label>
                    <tooltip tabindex=[0|-1] role="tooltip" aria-live="polite">
                        Set this minimum to two to get a nice feedback
                    </tooltip>
                </div>
                <input
                    v-model="repetition"
                    id="repetition"
                    type="number"
                    min="0"
                    placeholder="2"
                    :class="mdClasses ? 'md:w-1/2' : ''"
                    class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-2">
            </div>

            <div
                :class="mdClasses ? 'md:flex md:w-full md:px-16' : ''"
                class="mb-4">
                <div
                    :class="mdClasses ? 'md:w-1/2 md:px-4' : ''"
                    class="flex items-center relative">

                    <label class="w-full block" for="account">Select account</label>
                    <tooltip tabindex=[0|-1] role="tooltip" aria-live="polite">
                        Select your Lichess account
                    </tooltip>
                </div>

                <input
                    v-model="account"
                    id="account" type="text"
                    placeholder="Account"
                    :class="mdClasses ? 'md:w-1/2' : ''"
                    class="border transition ease-in-out focus:pl-4 pl-2 w-full bg-[#FEFEFE] border-[#333333] border-2">

            </div>

            <div
                :class="mdClasses ? 'md:pt-4' : ''"
                class="flex flex-col items-center w-full">
                <p
                    @click="clear"
                    class="pb-2 text-blue-500 mx-4 cursor-pointer text-sm text-[#F16B6C] flex">
                <span class="pr-1">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>Trashcan</title>
                        <desc>Clear all input values</desc>
                        <circle cx="9.34253" cy="9.86304" r="7.89087" stroke="#F16B6C" stroke-width="2"/>
                        <circle cx="9.34252" cy="9.86303" r="7.80321" fill="#F16B6C" stroke="#F4F4F4"/>
                        <g clip-path="url(#clip0_192_358)">
                        <path
                            d="M8.47589 5.44538C8.28488 5.49747 8.10775 5.62944 8.00877 5.79788C7.98272 5.8413 7.91847 6.00626 7.86464 6.16429L7.7674 6.45081L6.90957 6.45949C6.36431 6.46644 6.03264 6.47686 5.99964 6.48901C5.78605 6.56542 5.59851 6.7217 5.51863 6.89362C5.44744 7.04469 5.43181 7.16277 5.43876 7.53959L5.44396 7.88168L5.49259 7.93204C5.52211 7.96156 5.57594 7.99282 5.61761 8.00324C5.67145 8.01713 6.76544 8.02234 9.36845 8.02234C13.0168 8.02234 13.0429 8.02234 13.1106 7.98761C13.2339 7.92509 13.2495 7.86779 13.2495 7.49444C13.2495 7.31732 13.2408 7.13152 13.2304 7.08116C13.1731 6.81721 12.9873 6.60188 12.732 6.50464C12.6365 6.46991 12.5983 6.46817 11.7752 6.45949L10.9174 6.45081L10.8254 6.17818C10.716 5.84824 10.6691 5.75795 10.5406 5.63639C10.4295 5.53046 10.3426 5.48011 10.1985 5.44364C10.0561 5.40544 8.61655 5.40717 8.47589 5.44538ZM10.1134 5.96285C10.1968 5.99758 10.2367 6.05836 10.2992 6.24764C10.3287 6.33967 10.3583 6.4265 10.3635 6.43692C10.3687 6.45428 10.1568 6.45949 9.3424 6.45949C8.52799 6.45949 8.31613 6.45428 8.32134 6.43692C8.32655 6.4265 8.35607 6.33967 8.38559 6.24764C8.44811 6.06183 8.48805 5.99758 8.56792 5.96285C8.6478 5.92812 10.0301 5.92812 10.1134 5.96285Z"
                            fill="#F4F4F4"/>
                        <path
                            d="M6.0257 8.61276C6.0257 8.6336 6.11947 9.78142 6.23408 11.1671C6.46156 13.9178 6.44593 13.7858 6.57617 13.9751C6.68209 14.1313 6.83143 14.2321 7.02766 14.2824C7.11274 14.305 7.43226 14.3085 9.3372 14.3085C10.907 14.3085 11.5721 14.3033 11.6381 14.2894C11.8985 14.2338 12.1086 14.048 12.2024 13.7927C12.2389 13.6903 12.2615 13.4611 12.4507 11.1654C12.5653 9.78142 12.6591 8.6336 12.6591 8.61276V8.57803H9.34241H6.0257V8.61276ZM7.90111 9.13718C8.05045 9.21359 8.04003 9.05036 8.04003 11.1828C8.04003 13.3152 8.05045 13.152 7.90111 13.2284C7.80387 13.277 7.75525 13.277 7.658 13.2266C7.50866 13.152 7.51908 13.3152 7.51908 11.1828C7.51908 9.4237 7.52082 9.2952 7.55034 9.2379C7.58333 9.17191 7.70315 9.09898 7.77956 9.09898C7.80387 9.09898 7.85944 9.11634 7.90111 9.13718ZM9.46396 9.13718C9.6133 9.21359 9.60288 9.05036 9.60288 11.1828C9.60288 13.3152 9.6133 13.152 9.46396 13.2284C9.36672 13.277 9.3181 13.277 9.22085 13.2266C9.07151 13.152 9.08193 13.3152 9.08193 11.1828C9.08193 9.4237 9.08367 9.2952 9.11319 9.2379C9.14618 9.17191 9.266 9.09898 9.34241 9.09898C9.36672 9.09898 9.42229 9.11634 9.46396 9.13718ZM11.0268 9.13371C11.072 9.15628 11.1084 9.19275 11.131 9.2379C11.1657 9.30562 11.1657 9.33688 11.1657 11.1862C11.1657 13.3135 11.1761 13.152 11.0268 13.2284C10.9296 13.277 10.8809 13.277 10.7837 13.2284C10.6344 13.152 10.6448 13.3135 10.6448 11.1862C10.6448 9.33688 10.6448 9.30562 10.6795 9.2379C10.7438 9.11113 10.8948 9.06598 11.0268 9.13371Z"
                            fill="#F4F4F4"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_192_358">
                        <rect width="8.89087" height="8.89087" fill="white" transform="translate(4.89697 5.4176)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </span>
                    clear values
                </p>

                <button
                    v-if="! loading"
                    class="bg-[#86A5D9] px-3 hover:bg-[#1f4481] hover:text-white transition ease-in duration-100 uppercase w-36 h-12"
                    @click="getGames">Go!
                </button>
                <div class="w-full flex justify-center">
                    <div v-if="loading" id="loading"></div>
                </div>

            </div>
        </div>
    </transition>

</template>

<script>

import '../classes.js';
import Tooltip from './Tooltip'
import {gsap, Elastic} from 'gsap'

export default {
    components: {
        'tooltip': Tooltip,
    },
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
            mdClasses: true,
            synced: false,
            animating: false,
            animated: false,
        }
    },
    methods: {
        animateSyncedAndSync() {
            if (!this.animated) {
                var s_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                if (s_width >= 760) {

                    if (this.$refs.syncContainer.offsetWidth / 2 <= 760) {
                        console.log("Hola!")
                        this.mdClasses = false

                    }

                    this.animating = true
                    const propsIn = {
                        duration: 1,
                        width: this.$refs.syncContainer.offsetWidth / 2,
                        ease: Elastic.easeOut.config(1, 0.9),
                        onComplete: this.emitSynced()
                    }

                    gsap.to(this.$refs.syncContainer, propsIn)
                    this.animated = true;
                } else {
                    this.synced = true
                    this.$emit('synced', [this.movementMatrix, this.worsePlays, this.repetition])
                }
            }
        },
        limitMaxMatchesValue(event) {
            const value = event.target.value
            if (this.matches >= 500) {
                this.matches = 500
            }
            this.$forceUpdate()
        },
        clear() {
            this.account = "";
            this.ignore_first_moves = "";
            this.matches = "";
            this.repetition = "";
            this.errorScoreThreshold = "";
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

                    this.animateSyncedAndSync();

                })

        },
        emitSynced() {
            setTimeout(function () {
                this.animating = false
                this.synced = true

                this.$emit('synced', [this.movementMatrix, this.worsePlays, this.repetition])
            }.bind(this), 100);


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
