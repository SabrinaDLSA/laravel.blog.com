@extends('templates.main')
@section('title'){{'Tag content Laravel Blog'}}@endsection
@section('content')
<div class="row-fluid">
  <div class="container">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        @foreach($posts as $p)
            <h3 class='text-center'>{{$p->title}}</h3>
            <div align='center';><img src="{{$p->photo}}" title="{{$p->title}}" class="img-responsive img-thumbnail"></div>

            <div align='right'>
              <h5 class="text-info">Temas relacionados con el Artículo</h5>
                  <?php
                      $tags = explode(',', $p->tags);
                  ?>
                  @foreach($tags as $t)
                  <a href="{{$t}}" alt="labels"><label class="label label-primary">{{$t}}</label></a>
                  @endforeach
            </div>
            <p class='text-justify Nunito'>{{substr($p->content, 0, 250). '...'}}</p>
            <div align='center'><a href="articles/{{$p->slug}}" class="btn btn-info">Leer más....</a></div>
        @endforeach
        <div align="center">
          {!! $posts->render() !!}
        </div>
      </div>
      <div class="col-md-2">

      </div>
  </div>
</div>
<br>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
