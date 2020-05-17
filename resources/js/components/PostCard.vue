<template>
  <div>
    <p>{{ post.title}}</p>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true
    }
  }
}
</script>

<style>

</style>