@extends('layout.mainlayout')

@section('content')
<div id="app">
<div class="container mt5">
  <div class="row">
    <div class="col-sm-10 p10">
      <h1>Insert New Film</h1>
      @if ($errors->any())
        <br>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      @if(Session::has('success'))
        <br>
        <div class="alert alert-success">
          {{Session::get('success')}}
        </div>
      @endif

      <br><br>
      <form action="/films/test" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group row">
          <label for="inputName" class="col-sm-2 col-form-label">Film Title</label>
          <div class="col-sm-10">
            <input name="name" class="form-control" id="inputName" placeholder="Film Title">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputDescription" class="col-sm-2 col-form-label">Film Description</label>
          <div class="col-sm-10">
            <text-editor name="description"/>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputReleaseDate" class="col-sm-2 col-form-label">Release Date</label>
          <div class="col-sm-10">
            <datepicker name="release_date" format="yyyy-M-dd"></datepicker>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputReleaseDate" class="col-sm-2 col-form-label">Rating</label>
          <div class="col-sm-10">
            <rating name="rating"></rating>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputTicketPrice" class="col-sm-2 col-form-label">Ticket Price</label>
          <div class="col-sm-10">
            <input name="ticket_price" class="form-control" id="inputTicketPrice" placeholder="Ticket Price">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputCountry" class="col-sm-2 col-form-label">Country</label>
          <div class="col-sm-10">
            <country-selector name="country"></country-selector>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputGenre" class="col-sm-2 col-form-label">Genre</label>
          <div class="col-sm-10">
            <tags-inputer name="genre"></tags-inputer>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPhotoUrl" class="col-sm-2 col-form-label">Photo</label>
          <div class="col-sm-10">
            <input name="photo" class="form-control" id="inputPhotoUrl" placeholder="Photo URL">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
</div>
@endsection