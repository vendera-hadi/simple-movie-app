<template>
  <div>
    <input type="text" v-bind:name="name" v-bind:value="tagsArray" class="d-none">
    <input-tag :tags.sync="tagsArray"></input-tag>
  </div>
</template>

<script>
  export default {
      props: ['name'],
      data: function(){
        return {
          tagsArray: []
        }
      }
  }
</script>