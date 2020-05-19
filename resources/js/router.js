import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './views/Home.vue'
import Post from './views/Post.vue'

Vue.use(VueRouter)

export default new VueRouter({
  mode: 'history',
  routes: [
    { 
      path: '/', 
      name: 'home',
      component: Home 
    },
    { 
      path: '/post/:id', 
      name: 'post',
      component: Post,
      props: true
    }
  ]
})