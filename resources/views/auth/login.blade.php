<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
		<meta charset="UTF-8" />        
        <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Required -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/unicorn.login.css')}}" />
        
        <style>
            #loginbox .form-actions {
                padding: 2px 20px 15px;
            }
            #loginbox {
                height: 226px;
            }
        </style>
    </head>
    <body>
        <div id="logo" style="color: #fff; font-weight: bold; text-align:center;">
            Employee Maintenance
        </div>
        <div id="loginbox">            
            <!-- <form id="loginform" action="login" method="post" class="form-vertical"> -->
            {!! Form::open(['url' => 'login']) !!}  
                {{ csrf_field() }}
				<p>Enter username and password to continue.</p>                
                <div class="control-group{{ $errors->has('email') ? ' error' : '' }}">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input type="text" id="email" name="email" placeholder="Username" value="{{ old('email') }}" required autofocus/>                            
                        </div>
                        
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <input type="password" id="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    @if ($errors->has('email'))
                        <div id="result_div"><span style="color: red">{{ $errors->first('email') }}</span></div>                        
                    @endif
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" class="btn btn-inverse" value="Login" /></span>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/unicorn.login.js')}}"></script>
    </body>
</html>
