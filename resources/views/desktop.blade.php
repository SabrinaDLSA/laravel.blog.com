@extends('templates.main')
@section('title'){{'Bienvenido'. \Auth::user()->username}}@endsection
@section('content')
@include('templates.partials.login-nav')
<div class="row-fluid">
  <div class="container" id="admin">
    <div class="jumbotron">
      <h1 class="text-center">
        <small>Welcome to your desktop</small>
      </h1>
      @if(\Session::has('alert'))
          <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{$alert}}</strong>
          </div>
      @endif
    </div>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Tags</th>
        <th class="foo">Actions</th>
      </thead>
      <tbody>
          @foreach($posts as $x)
            <tr>
              <td>{{$x->title}}</td>
              <td>{{$x->slug}}</td>
              <td>{{$x->created_at}}</td>
              <td>{{$x->updated_at}}</td>
              <td>{{$x->tags}}</td>
              <td>
                <div class="btn-group-justified">
                  <a href="admin/posts/{{$x->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  <a href="admin/posts/{{$x->id}}/delete"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <div class="col-mid-2">

    </div>
  </div>

</div>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
