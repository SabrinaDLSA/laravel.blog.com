@extends('templates.main')
@section('title'){{'Zona de Registro'}}@endsection
@section('content')
<!-- resources/views/auth/login.blade.php -->
<div class="row-fluid">
  <div class="container" align="center">
    <div class="container" id="admin">
      <div class="jumbotron">
        <h1 class="text-center">
           <small>Welcome back</small>
        </h1>
      </div>
    <div class="col-md-4">
      <a href="{{route('home')}}"><i class="fa fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="col-md-4">
      <div class="well well-lg">
        <form class="form-horizontal" method="POST" action="/auth/register">
          {!! csrf_field() !!}
          <fieldset>
            <legend></legend>
            <div class="form-group">
              <label for="inputName" class="col-lg-2 control-label">Name</label>
              <div class="col-lg-10">
                <input type="name" name="name" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Pass</label>
              <div class="col-lg-10">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
            </div>
              <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input type="password" name="password_confirmation" class="form-control" id="inputPassword" placeholder="Password" >
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group" align="center">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
        <div class="">
          <a href="register" class=""> Create an account </a>
        </div>
        <div class="">
          <a href="#" class=""> Lost your password?</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>

@include('templates.partials.footer')
@stop
