<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/bootstrap-responsive.min.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/unicorn.login.css')); ?>" />
        
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
            <form id="loginform" class="form-vertical">
				<p>Enter username and password to continue.</p>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" id="username" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div id="result_div">&nbsp;</div>
                    </div>
                </div>
                <div class="form-actions">
                    <!-- span class="pull-left"><a href="javascript:void(0)" class="flip-link" id="to-recover">Lost password?</a></span -->
                    <span class="pull-right"><input type="submit" class="btn btn-inverse" value="Login" /></span>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/unicorn.login.js')); ?>"></script>
    </body>
</html>
