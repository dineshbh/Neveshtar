<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>{{$title}}</title>
</head>
<?php flush(); ?>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  	<div class="row">
    <div id="navbar" class="navbar-collapse collapse">
  	<div class="col-xs-8">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Neveshtar <small>- Open Source Laravel 5 CMS</small></a>
    </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/category">Category</a></li>
        <li class=""><a href="/">Category</a></li>
      </ul>
  	</div>
  	<div class="col-xs-4">
      <ul class="nav navbar-nav pull-right">
		@if (Auth::guest())
			<li><a href="/auth/register">Register</a></li>
			<a href="/auth/login"><button type="button" class="btn btn-default navbar-btn">Login</button></a>
		@else
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/auth/logout">Logout</a></li>
				</ul>
			</li>
		@endif
      </ul>
  	</div>
    </div><!--/.nav-collapse -->
  	</div>
  </div>
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container-fluid">
        <h1>Hello, world!</h1>
        <p>This is the playground for the Neveshtar Project!</p>
        <a class="btn btn-primary btn-lg" href="http://github.com/hosseinhkj/Neveshtar" target="_blank" role="button">Learn more &raquo;</a>
      </div>
    </div>
	<div class="container-fluid">
	@yield('content')
	</div>
  <hr>
  <footer>
    <p>&copy; Neveshtar.com 2015</p>
  </footer>
</div> <!-- /container -->
<?php flush(); ?>
<link href="/themes/bootstrap/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="/themes/bootstrap/assets/js/jquery.min.js"></script>
<script src="/themes/bootstrap/assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/themes/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>