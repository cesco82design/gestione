@extends('layouts.default')

@section('content')
    <section class="container margintop30 first_section">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				{{ Form::open(array('class' => 'form-horizontal', 'autocomplete' => 'off','url' => '/login')) }}

					
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                {{ Form::email('email', null, array('class' => 'form-control','placeholder' => 'example@domain.ext','required' => 'required')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('email') }}</p>
                        </div>
                    </div>


					<div class="form-group{{ $errors->has('password') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                {{ Form::password('password',  array('class' => 'form-control','placeholder' => 'Password','required' => 'required')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('password') }}</p>
                        </div>
                    </div>

					<!--<div class="form-group">
						<div class="col-xs-12">
							<label for="remember" class="col-xs-6">
								
								Remember me
							</label>
							<div class="col-xs-6">
								{{ Form::checkbox('remember') }}
							</div>
						</div>
					</div>-->

					<div class="form-group">
						<div class="col-xs-12 col-sm-6">
							{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
							</div>
						<div class="col-xs-12 col-sm-6">
							{{ Form::reset('Reset', array('class' => 'btn btn-default')) }}
							<a href="{{ URL::to('reset') }}">Forgot password?</a>
						</div>
					</div>

				{{ Form::close() }}
			</div>
		</div>
	</section>
@stop