require('./bootstrap');
window.Vue = require('vue');

import router from './routes/routers'
import store from './vuex/store'

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue').default);
Vue.component('menubar-component', require('./components/MenuBar.vue').default);

const app = new Vue({
    router,
    el: '#app',
});
