@extends('templates.main')
@section('title'){{'Bienvenido'. \Auth::user()->username}}@endsection
@section('content')
@include('templates.partials.login-nav')

<div class="row-fluid">
  <div class="container" id="admin">
    <div class="jumbotron">
      <h1 class="text-center">
         <small>Editing "{{$post->title}}"</small>
      </h1>
    </div>
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    {!! Form::open (['url' => 'admin/posts/'.$post->id.'/refresh'])!!}
      <fieldset>
        <input type="text" name="title" value="{{$post->title}}" class="form-control">
        <br>
        <textarea name="content" id="editor" cols="20" rows="10" class="form-control">
          {{$post->content}}
        </textarea>
        <br>
        <input type="text" name="tags" value="{{$post->tags}}" class="form-control">
        <br>
        <input type="text" name="photo" value="{{$post->photo}}" class="form-control">
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
