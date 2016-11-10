<ul>
	<li{{ Request::is('index') ? ' class="active"' : null }}><a href="{{ URL::to('index') }}">Home</a></li>
	<li{{ Request::is('siti') ? ' class=active' : null }}><a href="{{ url('/siti') }}">Siti</a></li>
	<li{{ Request::is('portafoglio') ? ' class="active"' : null }}><a href="{{ url('/portafoglio') }}">Money</a></li>
	<li{{ Request::is('contact') ? ' class="active"' : null }}><a href="{{ url('/contact') }}">Contatti</a></li>
	<li{{ Request::is('login') ? ' class="active"' : null }}><a href="{{ URL::to('login') }}">Login</a></li>
</ul>