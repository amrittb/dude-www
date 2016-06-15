<template>
    <form class="pure-form">
        <input type="text" placeholder="what next?." v-model="question">
        <button type="submit" class="pure-button pure-button-primary" @click.prevent="GetAnswer()">Send</button>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                question: ''
            }
        },
        methods: {
            GetAnswer() {
                this.$dispatch('SendMessage',this.question);
                this.question = '';
            }
        }
    }
</script>
