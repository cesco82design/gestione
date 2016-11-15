
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Siti Gestiti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/app.css')}}">
</head>
<body>
    @if ( Sentinel::getUser())
        @include('commons.menu_logged')
    @else
        @include('commons.menu')
    @endif
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
<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('/assets/js/bootstrap.min.js')}}"></script>
</body>
</html>