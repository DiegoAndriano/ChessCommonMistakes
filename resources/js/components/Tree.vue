<template>
    <div :style="'background-color:'+ (depth % 2 === 1 ? '#afa' : '#fff') +'; padding-left: ' + depth * 2 + 'px;'">
        <button

            @click="seeTree" ><span class="font-bold">{{depth}} | #{{moves.repetition}} |</span>. <span class="font-bold">{{ name }}</span>  | {{ moves.score }}</button>
        <br>
        <tree v-if="showTree" v-for="(move, n) in moves.movements" :name="n" :moves="move" :key="n + move.score" :depth="depth + 1"></tree>
    </div>
</template>

<script>
import { EventBus } from '../app';

export default {
    name:'tree',
    emits: ['clickeado'],
    props: {
        'depth': Number,
        'moves': Object,
        'name': String,
        'bus': Object(),
    },
    data() {
        return {
            showTree: false,
        }
    },
    methods: {
        seeTree(){
            this.showTree = !this.showTree;//true;

            EventBus.$emit('clickeado', this.moves);
        }
    }
}
</script>
