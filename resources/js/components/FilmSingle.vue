<template>
  <div class="container">
    <div class="row" v-if="!film">
      <div class ="col-sm-1"></div>
      <div class ="col-sm-12">
        <h3>Loading ...</h3>
      </div>
      <div class ="col-sm-1"></div>
    </div>

    <div class="row" v-if="film">
      <div class ="col-sm-1"></div>
      <div class ="col-sm-10">
        <br /><br />
        <h1><b>{{film.name}}</b></h1>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <img v-bind:src="film.photo" class="img-responsive w-100">
          </div>
          <div class="col-sm-8">
            {{film.description}}
            <br><br>
            <span class="badge badge-pill badge-primary">Genre: {{film.genre}}</span>
            <span class="badge badge-pill badge-secondary">Rating: {{film.rating | to_rating}}</span>
            <span class="badge badge-pill badge-success">Ticket Price: {{film.ticket_price | usd_format}}</span>
            <span class="badge badge-pill badge-danger">Country: {{film.country}}</span>
            <span class="badge badge-pill badge-warning">Release Date: {{film.release_date | date_format}}</span>
          </div>
        </div>

      </div>
      <div class ="col-sm-1"></div>
    </div>

  </div>
</template>

<script>
  var numeral = require("numeral");
  var moment = require('moment');

  export default {
      data: function(){
        return {
          film: null
        }
      },
      filters: {
        to_rating: item => {
          let i, result="";
          for(i=0; i<item; i++){
            result += "* "
          }
          return result
        },
        usd_format: item => {
          return "$ "+numeral(item).format("0,0")
        },
        date_format: item => {
          return moment(item).format("MMMM Do YYYY");
        }
      },
      created() {
        let url = window.location.pathname;
        let slug = url.substr(url.lastIndexOf('/') + 1);
        let vm = this;
        axios.get('/api/films/'+slug)
          .then(function (response) {
            // handle success
            vm.film = response.data
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