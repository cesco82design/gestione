<nav class="menu">
	<ul>
		<li{{ Request::is('') ? ' class="active"' : null }}><a href="{{ URL::to('/') }}">Home</a></li>
		<li{{ Request::is('') ? ' class="active"' : null }}><a href="{{ URL::to('/') }}">Sono Loggato</a></li>
		
		@if (Request::is('login'))
		<li><a href="{{ URL::to('register') }}">Register</a></li>
		@else
		<li><a href="{{ URL::to('logout') }}">Logout</a></li>
		@endif
	</ul>
</nav>