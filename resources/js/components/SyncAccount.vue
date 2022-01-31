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

export default {
    data() {
        return {
            account: "",
        }
    },
    methods: {
        getGames() {
            axios.get('https://lichess.org/api/games/user/' + this.account + '?max=3')
                .then(response => {
                    console.log(response)
                })
        }
    }
    ,
}
</script>
