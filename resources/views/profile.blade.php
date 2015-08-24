@extends('templates.main')
@section('title'){{'Profile'}}@endsection
@section('content')
  <div class="row-fluid">
    <div class="container">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
          <div class="jumbotron">
            <h1 class="text-center">{{'Welcome back'}}<br><small>{{\Auth::user()->username}}</small></h1>
          </div>
          <div class="col-md-8">
            {!! Form::open (['url' => 'admin/profile/ModifyUser'])!!}
              <fieldset>
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{\Auth::user()->name}}" class="form-control">
                <br>
                <label for="email">Email:</label>
                <input type="text" name="email" value="{{\Auth::user()->email}}" class="form-control">
                <br>
                <label for="username">Username:</label>
                <input type="text" name="username" value="{{\Auth::user()->username}}" class="form-control">
                <br>
                <input type="submit" value="Update" class="btn btn-block btn-primary">
              </fieldset>
            {!! Form::close() !!}
          </div>
      </div>
      <div class="col-md-2">

      </div>
  </div>
  </div>
  <br>
  <br>
  <section>

  </section>
@endsection
@section('js')
  <script>
    $('#editor').trumbowyg();
  </script>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
