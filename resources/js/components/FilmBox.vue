<template>
  <div class="list-group">
    <a v-bind:href="'/films/'+slug(film.name)" class="list-group-item ">
      <h2 class="list-group-item-heading"><b>{{film.name}}</b></h2>
      <p class="list-group-item-text">{{strlimit(film.description)}}</p>
    </a>
  </div>
</template>

<script>
  export default {
    props: ['film'],
    methods: {
      strlimit (text) {
          let body = this.stripTags(text);
          return body.length > 100 ? body.substring(0, 100) + '...' : body;
      },
      stripTags (text) {
          return text.replace(/(<([^>]+)>)/ig, '');
      },
      slug(text){
         return text.toString().toLowerCase().trim()
            .replace(/é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e')
            .replace(/á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a')
            .replace(/ö|ő|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o')
            .replace(/ü|ű|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u')
            .replace(/í/gi, 'i')
            .replace(/đ/gi, 'd')
            .replace(/ļ/gi, 'l')
            .replace(/\s*$/g, '')
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '');
      }
    }
  }
</script>