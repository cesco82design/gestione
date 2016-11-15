@extends('layouts.default')

@section('content')
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
@stop
    