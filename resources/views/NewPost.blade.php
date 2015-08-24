@extends('templates.main')
@section('title'){{'New Post'. \Auth::user()->username}}@endsection
@section('content')
@include('templates.partials.login-nav')

<div class="row-fluid">
  <div class="container" id="admin">
    <div class="jumbotron">
      <h1 class="text-center">
         <small>Creating a new Post</small>
      </h1>
    </div>
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    {!! Form::open (['url' => 'admin/posts/NewPost'])!!}
      <fieldset>
        <input type="text" name="title" placeholder="Here goes the title.." class="form-control">
        <br>
        <textarea name="content" id="editor" cols="20" rows="10" class="form-control" placeholder="Start typing here....">
        </textarea>
        <br>
        <input type="text" name="tags" placeholder="You can put tags here..." class="form-control">
        <br>
        <input type="text" name="photo" placeholder="Upload your picture Here..." class="form-control">
        <br>
        <input type="submit" value="Update" class="btn btn-block btn-primary">
      </fieldset>
    {!! Form::close() !!}
  </div>
  <div class="col-md-1"></div>
</div>
</div>
<br><br>
@endsection
@section('js')
  <script>
    $('#editor').trumbowyg();
  </script>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
