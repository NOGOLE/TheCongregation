<!DOCTYPE html>
<html>
    <head>
        <title>The Congregation - @yield('title')</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        @section('menu')
        <nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
  <a class="navbar-brand" href="#">The Congregation</a>
</div>
<div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="/about">About</a></li>
	@unless(Auth::check())
    <li><a href="/registration">Register</a></li>
       @endunless
  </ul>
  @if (Auth::check())
  Welcome
  @else
  <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                          <input type="text" class="form-control" name="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="password" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-success">Sign In</button>
                  </form>
  @endif


</div>
</div>
</nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
