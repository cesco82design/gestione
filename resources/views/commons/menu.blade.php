<nav class="menu{{ Request::is('/') ? ' home' : null }}">
	<ul>
		<li{{ Request::is('') ? ' class="active"' : null }}><a href="{{ URL::to('/') }}">Home</a></li>
		<!--<li{{ Request::is('siti') ? ' class=active' : null }}><a href="{{ url('/siti') }}">Siti</a></li>
		<li{{ Request::is('portafoglio') ? ' class="active"' : null }}><a href="{{ url('/portafoglio') }}">Money</a></li>
		<li{{ Request::is('contact') ? ' class="active"' : null }}><a href="{{ url('/contact') }}">Contatti</a></li>-->
		@if (Request::is('login'))
		<li><a href="{{ URL::to('register') }}">Register</a></li>
		@elseif (Request::is('register'))
		<li><a href="{{ URL::to('login') }}">Login</a></li>
		@else
		<li><a href="{{ URL::to('login') }}">Login</a></li>
		<li><a href="{{ URL::to('register') }}">Register</a></li>
		@endif
	</ul>
</nav>