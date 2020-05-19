<template>
  <div>
    <p>Post #{{id}}</p>
    <div v-if="post">
      <h1>{{post.title}}</h1>
      <p>{{post.body}}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    id: {
      type: String
    }
  },
  data(){
    return {
      post: null
    }
  },
  created(){
    this.fetchData();
  },
  methods: {
    fetchData(){
      axios
      .get('/api/posts/'+this.id)
      .then(response=>{
        console.log(response.data);
        this.post = response.data.data;
      })
      .catch(err => {
        console.log('API error: ' + err)
      })
    }
  }
}
</script>

<style>

</style>