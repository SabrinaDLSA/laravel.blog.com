<nav class="navbar navbar-default hide" id="navi">
  <div class="container">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        @if(Auth::check())
        <a class="navbar-brand" href="#">Hello <small>{{\Auth::user()->username}}</small></a>
        @else
        <a class="navbar-brand" href="{{route('home')}}">TestLara.com</a>
        @endif
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{route('home')}}">Home<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="POST" action="/search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button id="searcher" type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
          <li><a href="{{route('logout')}}">Logout</a></li>
          @else
          <li><a href="{{route('adminsite')}}">Login</a></li>
          @endif
        </ul>
      </div>
    </div>
  <div>
</nav>
