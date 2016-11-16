@extends('layouts.default')

@section('meta-title')
	Lista Utenti
@stop

@section('content')
	@foreach ($utenti as $utente)
	    <p>This is user {{ $utente->id }}</p>
	@endforeach
	
@stop