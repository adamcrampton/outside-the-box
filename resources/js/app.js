require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('left', require('./components/left.vue').default);
Vue.component('right', require('./components/right.vue').default);
Vue.component('middle', require('./components/middle.vue').default);
Vue.component('answer', require('./components/answer.vue').default);

new Vue({
    el: '#app-container'
});
