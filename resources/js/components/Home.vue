<template>
  <div>
    <h1>Home</h1>
    <PostCard v-for="post in posts" :key="post.id" :post="post" />
  </div>
</template>

<script>
import PostCard from './PostCard.vue'
import axios from 'axios'


export default {
  components: {
    PostCard
  },
  data(){
    return {
      posts: []
    }
  },
  created(){
    axios
      .get('/api/posts')
      .then(response=>{
        this.posts = response.data.data;
      })
      .catch(err => {
        console.log('API error: ' + err)
      })
  }

}
</script>

<style>

</style>