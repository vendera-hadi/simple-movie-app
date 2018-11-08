<template>
  <div>
    <select v-model="selectedCountry" v-bind:name="name">
      <option disabled selected value>Select a country</option>
      <option v-for="country in countries" v-bind:value="country.name">{{ country.name }}</option>
    </select>
  </div>
</template>

<script>
  export default {
      props: ['name','selected'],
      data: function(){
        return {
          countries: [],
          selectedCountry: ''
        }
      },
      created() {
        console.log('rating loaded');
      },
      methods: {
        getCountriesList: function() {
          this.countries = [
            {name: 'UK'},
            {name: 'United States'},
            {name: 'Canada'}
          ]
        }
      },
      created: function() {
        this.getCountriesList()
      }
  }
</script>