require('./bootstrap');

import Vue from 'vue'

import App from './vue/app'

import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add( faPlusSquare, faTrash)
let router = createRouter({ history: createWebHashHistory(), routes: router_main }) 
const app = createApp(App); 
// 위에 createApp을 통해 생성한 Vue Application 인스턴스의 component API 활용 

app.component('font-awesome-icon', FontAwesomeIcon)

app.use(router); 
app.mount('#app');


// const app = new Vue({
//     el: '#app',
//     components: { App }
// })