<template>
  <ol class="chat-history__messages">
      <li class="message-box" v-for="message in messages" v-bind:class="{'message-box--sent': message.isSent, 'message-box--recieved': !message.isSent}">
          <p class="message">
              {{ message.message }}
          </p>
      </li>
  </ol>
</template>

<script>
    export default {
        data() {
            return {
                messages : []
            }
        },
        events: {
            'AddMessage': function(message,isSent) {
                  this.messages.push({message,isSent});

                  this.$el.scrollIntoView(false);
            }
        }
    }
</script>
