@extends('layouts.default')

@section('content')
	<section class="add_site">
     <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2"> 
        		{{ Form::open(array('class' => 'form-horizontal','id' =>'RegisterUser', 'autocomplete' => 'off', 'url'=>'/add_site')) }}
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                {{ Form::text('societa', null, array('class' => 'form-control', 'placeholder' => 'Società')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('societa') }}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                {{ Form::text('url', null, array('class' => 'form-control', 'placeholder' => 'URL')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('url') }}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                {{ Form::text('referente', null, array('class' => 'form-control', 'placeholder' => 'Referente')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('referente') }}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {{ Form::text('scadenza', null, array('class' => 'form-control', 'placeholder' => 'Scadenza sito')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('scadenza') }}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {{ Form::text('pagamento', null, array('class' => 'form-control', 'placeholder' => 'Pagamento')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('pagamento') }}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {{ Form::text('saldato', null, array('class' => 'form-control', 'placeholder' => 'Saldato')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('saldato') }}</p>
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
@stop