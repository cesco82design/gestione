@extends('layouts.default')

@section('meta-title')
	Lista Utenti
@stop

@section('content')
<section class="margintop30">
	<div class="container margintop30">
		<div class="row">
			<div class="col-xs-12 margintop30">
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<th>Nome e Cognome</th>
							<th>User</th>
							<th>Email</th>
							<th>Permission</th>
							<th>Last Login</th>
							@if ( Sentinel::getUser())
							<th></th>
							<th></th>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach ($utenti as $utente)

						<tr>
						    <td>{{ $utente->first_name }} {{ $utente->last_name }}</td>
						    <td>{{ $utente->username }}</td>
						    <td>{{ $utente->email }}</td>
						    <td>{{ $utente->permissions }}</td>
						    <td>{{ $utente->last_login }}</td>
						    
							@if ( Sentinel::getUser())
							<td></td>
							<td></td>
							@endif
					    </tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
	
@stop