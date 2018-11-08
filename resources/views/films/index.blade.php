@extends('layout.mainlayout')

@section('content')
<div id="app">
  <div class="row">
    <div class ="col-sm-1"></div>
    <div class ="col-sm-10">
      <br />
      <br />

      <h1><b>Film Lists:</b></h1>
      <br />
      <!-- list of films component-->
      <film-lists/>

    </div>
    <div class ="col-sm-1"></div>
  </div>
</div>
<br /><br />
@endsection