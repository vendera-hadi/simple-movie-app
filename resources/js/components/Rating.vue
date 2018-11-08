<template>
  <div>
    <input type="text" v-bind:name="name" v-bind:value="value" class="d-none">
    <star-rating v-model="value"></star-rating>
  </div>
</template>

<script>
  export default {
      props: ['name'],
      data: function(){
        return {
          value: 0
        }
      },
      created() {
        console.log('rating loaded');
      }
  }
</script>