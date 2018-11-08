<template>
  <div>
    <textarea v-bind:name="name" v-bind:value="value" class="d-none"></textarea>
    <wysiwyg v-model="value"/>
  </div>
</template>

<script>
  export default {
      props: ['name'],
      data: function(){
        return {
          value: null
        }
      },
      created() {
        console.log('textarea loaded');
      }
  }
</script>