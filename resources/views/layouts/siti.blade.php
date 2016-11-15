@extends('layouts.default')

@section('content')
<section>
	<div class="container">
		<div class="row margintop30">
			<div class="col-xs-12">
				<a href="{{ url('/add_sito') }}"><i class="fa fa-plus"></i> Aggiungi Sito</a>
			</div>
		</div>
		<div class="row margintop30">
			<table class="table table-hover table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Società</th>
						<th>URL</th>
						@if ( Sentinel::getUser())
						<th>Referente</th>
						<th>Scadenza</th>
						<th>Pagamento</th>
						<th>Saldato</th>
						<th></th>
						<th></th>
						@endif
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						@if ( Sentinel::getUser())
						<td>@mdo</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						@endif
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						@if ( Sentinel::getUser())
						<td>@fat</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						@endif
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						@if ( Sentinel::getUser())
						<td>@twitter</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						@endif
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row margintop30">
			<div class="col-xs-12">
				<a href="{{ url('/add_sito') }}"><i class="fa fa-plus"></i> Aggiungi Sito</a>
			</div>
		</div>
	</div>
</section>
@stop