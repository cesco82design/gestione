<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/app.css')}}">
</head>
<body>
    @include('commons.menu')
    <section class="first_section">
        <div class="container">
            <div class="row margintop30">
                <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                    {{ Form::open(array('class' => 'form-horizontal','id' =>'RegisterUser', 'autocomplete' => 'off', 'url'=>'/register')) }}
                    
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'your username')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('username') }}</p>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                {{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'your first name')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('first_name') }}</p>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'your last name')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('last_name') }}</p>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                {{ Form::text('location', null, array('class' => 'form-control', 'placeholder' => 'your location')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('location') }}</p>
                        </div>
                    </div>

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
                                {{ Form::password('password', array('class' => 'form-control','id'=>'pwd','placeholder' => 'Password','required' => 'required')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('password') }}</p>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : null }}">
                        <div class="col-xs-12">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                {{ Form::password('password_confirmation', array('class' => 'form-control','placeholder' => 'Confirm Password','required' => 'required')) }}
                            </div>
                            <p class="help-block">{{ $errors->first('password_confirmation') }}</p>
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
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#RegisterUser" ).validate({
  rules: {
    password: "required",
    password_confirmation: {
      equalTo: "#pwd"
    }
  }
});
</script>
</body>
</html>