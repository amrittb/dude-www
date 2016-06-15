import Vue from 'vue';

import VueResource from 'vue-resource';

Vue.config.debug = true;

Vue.use(VueResource);

import ChatBox from "./components/ChatBox.vue";
import ChatHistory from "./components/ChatHistory.vue";

new Vue({
    el: 'body',
    components: {
        "chat-box" : ChatBox,
        "chat-history" : ChatHistory
    },
    events: {
      'SendMessage' : function(message) {
        this.$broadcast('AddMessage',message,true);

        this.$http.post('/ask',{question: message}).then(function(response) {
            console.log(response);
            if(response.data == "\n") {
              response.data = "Sorry I cant understand what you are saying.";
            }
            this.$broadcast('AddMessage',response.data,false);
        });
      }
    }
});
