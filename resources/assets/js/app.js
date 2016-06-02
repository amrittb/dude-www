import Vue from 'vue';

import VueResource from 'vue-resource';

Vue.config.debug = true;

Vue.use(VueResource);

new Vue({
    el: 'body'
});
