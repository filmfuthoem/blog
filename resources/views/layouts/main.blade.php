<!Doctype html>
<html>
<head>
	<title>@yield('page_title')</title>
	{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('css/custom.css') !!}
	{!! Html::style('css/blog.css') !!}
	{!! Html::style('css/about.css') !!}
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #191970;">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">BLOG</a>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="/hello">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/about">ABOUT</a>
	      </li>
	    </ul>

	    <!-- search -->
	    <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
	  </div>
	</nav>

	

	@yield('content')

	<footer class="blog-footer">
		<p>COPYRIGHT</p>
		<p>
        <a href="#">Back to top</a>
      </p>
	</footer>
	{!! Html::script('js/jquery-3.1.0.min.js') !!}
	{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
</body>
</html>