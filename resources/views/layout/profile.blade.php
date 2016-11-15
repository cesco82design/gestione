<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile {{ Sentinel::getUser()->name() }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/app.css')}}">
</head>
<body>
    @include('commons.menu_logged')
    <section class="container margintop30 first_section">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="col-xs-6">
					<label>Cognome</label>
					<p>{{ Sentinel::getUser()->last_name }}</p>
				</div>
				<div class="col-xs-6">
					<label>Nome</label>
					<p>{{ Sentinel::getUser()->first_name }}</p>
				</div>
				<div class="col-xs-6">
					<label><i class="fa fa-user"></i> Username</label>
					<p>{{ Sentinel::getUser()->username }}</p>
				</div>
				<div class="col-xs-6">
					<label><i class="fa fa-map-marker"></i> Location</label>
					<p>{{ Sentinel::getUser()->location }}</p>
				</div>
				<div class="col-xs-6 margintop30">
					<label><i class="fa fa-envelope"></i> Email</label>
					<p>{{ Sentinel::getUser()->email }}</p>
				</div>
				<div class="col-xs-6 margintop30">
					<label><i class="fa fa-lock"></i> Last Login</label>
					<p>{{ Sentinel::getUser()->last_login }}</p>
				</div>
				<div class="col-xs-6"></div>
				<div class="col-xs-6"></div>
			</div>
		</div>
	</section>
<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('/assets/js/bootstrap.min.js')}}"></script>
</body>
</html>