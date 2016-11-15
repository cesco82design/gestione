<!--<nav class="menu{{ Request::is('/') ? ' home' : null }}">
	<ul>
		<li{{ Request::is('') ? ' class="active"' : null }}><a href="{{ URL::to('/') }}">Home</a></li>
		<!--<li{{ Request::is('siti') ? ' class=active' : null }}><a href="{{ url('/siti') }}">Siti</a></li>
		<li{{ Request::is('portafoglio') ? ' class="active"' : null }}><a href="{{ url('/portafoglio') }}">Money</a></li>
		<li{{ Request::is('contact') ? ' class="active"' : null }}><a href="{{ url('/contact') }}">Contatti</a></li>- ->
		@if (Request::is('login'))
		<li><a href="{{ URL::to('register') }}">Register</a></li>
		@elseif (Request::is('register'))
		<li><a href="{{ URL::to('login') }}">Login</a></li>
		@else
		<li><a href="{{ URL::to('login') }}">Login</a></li>
		<li><a href="{{ URL::to('register') }}">Register</a></li>
		@endif
	</ul>
</nav>-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li{{ Request::is('') ? ' class="active"' : null }}><a href="{{ URL::to('/') }}">Home</a></li>
        <li{{ Request::is('siti') ? ' class=active' : null }}><a href="{{ url('/siti') }}">Siti</a></li>
      	<li class="divider-vertical"></li>
        @if (Request::is('login'))
		<li><a href="{{ URL::to('register') }}">Register</a></li>
		@elseif (Request::is('register'))
		<li><a href="{{ URL::to('login') }}">Login</a></li>
		@else
		<li><a href="{{ URL::to('login') }}">Login</a></li>
		<li><a href="{{ URL::to('register') }}">Register</a></li>
		@endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>