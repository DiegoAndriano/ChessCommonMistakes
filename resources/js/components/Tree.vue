<template>
    <div>
        <button
            :style="'background-color:'+ (depth % 2 === 1 ? '#afa' : '#fff') +';'"
            @click="seeTree" ><span class="font-bold">{{depth}} | {{moves.repetition}} Games |</span> <span class="font-bold">{{ name }}</span>  | Eval: {{ moves.score }}</button>
        <br>
        <tree v-if="showTree" v-for="(move, n) in moves.movements" :story-received="story" :name="n" :moves="move" :key="n + move.score" :depth="depth + 1"></tree>
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
        'storyReceived': [],
    },
    mounted() {
        this.story = Array.from(this.storyReceived);
        this.story.push(this.moves);
        this.counter++;

    },
    data() {
        return {
            story : [],
            showTree: false,
            counter: 0,
        }
    },
    methods: {
        seeTree(){
            this.showTree = !this.showTree;

            EventBus.$emit('clickeado', [this.moves, this.name, this.story]);
        }
    }
}
</script>
