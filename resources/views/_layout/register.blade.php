<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/app.css')}}">
</head>
<body>
	<div class="margintop30">
		<nav class="menu">
			@include('commons.menu')
		</nav>
	</div>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					{{ Form::open(array('class' => 'form-horizontal', 'autocomplete' => 'off',)) }}

					<div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
						<label for="email" class="col-xs-12">Email</label>
						<div class="col-xs-12">
							{{ Form::email('email', null, array('class' => 'form-control')) }}
							<p class="help-block">{{ $errors->first('email') }}</p>
						</div>
					</div>

					<div class="form-group{{ $errors->has('password') ? ' has-error' : null }}">
						<label for="password" class="col-xs-12">Password</label>
						<div class="col-xs-12">
							{{ Form::password('password', array('class' => 'form-control')) }}
							<p class="help-block">{{ $errors->first('password') }}</p>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<label for="remember" class="col-xs-6">
								
								Remember me
							</label>
							<div class="col-xs-6">
								{{ Form::checkbox('remember') }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12 col-sm-6">
							{{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
							</div>
						<div class="col-xs-12 col-sm-6">
							{{ Form::reset('Reset', array('class' => 'btn btn-default')) }}
						</div>
					</div>

				{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>
</body>
</html>