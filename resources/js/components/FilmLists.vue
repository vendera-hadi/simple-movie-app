<template>
  <div>
    <div class="list-group" v-if="!films">
      <h3>Loading Data ...</h3>
    </div>

    <film-box v-for="film in films" v-if="films" v-bind:film="film" />

  </div>
</template>

<script>
  export default {
      data: function(){
          return {
            films: null
          }
        },
      created() {
        let vm = this;
        axios.get('/api/films')
          .then(function (response) {
            // handle success
            vm.films = response.data
          })
          .catch(function (error) {
            // handle error
            console.log(error);
          })
          .then(function () {
          });
      }
  }
</script>