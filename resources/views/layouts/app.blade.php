<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Employee Maintenance</title>
    <!-- Styles -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/uniform.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/select2.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/unicorn.main.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/unicorn.grey.css')}}" class="skin-color"/>

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.custom.min.min.js')}}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="header">
        <h1 style="background: none; color: #fff; line-height: 20px; font-size: 22px;">
            EM       
        </h1>       
    </div>
            
    <div id="search" style="color: #fff; font-weight: bold;">
        <!-- Name of the User -->
    </div>
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav btn-group">
            <!-- <li class="btn btn-inverse" id="menu-icon"><a href="#" data-toggle="dropdown"><i class="icon icon-globe"></i> <span class="text">Notification</span> <span class="label label-important">1</span></a></li> -->
            <li class="btn btn-inverse dropdown" id="menu-notification">
                <a href="#" data-toggle="dropdown" data-target="#menu-notification" class="dropdown-toggle">
                    <i class="icon icon-globe"></i> <span class="text">Notification</span>                
                    <span class="label label-important">1</span> 
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li class="" title=""><a class="sAdd" title="" href=""></a></li>                
                </ul>
            </li>
            <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#">new message</a></li>
                    <li><a class="sInbox" title="" href="#">inbox</a></li>
                    <li><a class="sOutbox" title="" href="#">outbox</a></li>
                    <li><a class="sTrash" title="" href="#">trash</a></li>
                </ul>
            </li>        
            <li class="btn btn-inverse dropdown" id="menu-settings"><a href="#" data-toggle="dropdown" data-target="#menu-settings" class="dropdown-toggle"><i class="icon icon-cog"></i> <span class="text">My Settings</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="javascript:void(0)">My Profile</a></li>
                </ul>
            </li>
            <li class="btn btn-inverse">
                <a title="" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="icon icon-share-alt"></i> 
                    <span class="text">Logout</span>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </a>
            </li>
        </ul>
    </div>    
    <div id="sidebar">
        <a href="javascription:void(0)" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
        <ul>
            <li class="active" ><a href="">
            <i class="icon icon-file"></i> <span>Employees</span> 
            <ul>
                <li><a href="{{ url('/employees') }}"> Employees </a></li>
            </ul>
        </ul>       
    </div>      
    <div id="content" style="">

        @yield('content')
        <div class="row-fluid">
            <div id="footer" class="span12">
                2017 &copy; Norman Claridad 
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <!-- script src="/js/app.js"></script -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.uniform.js')}}"></script>
    <script src="{{URL::asset('js/select2.min.js')}}"></script>
    <script src="{{URL::asset('js/unicorn.tables.js')}}"></script>
    <script src="{{URL::asset('js/unicorn.form_validation.js')}}"></script>
</body>
</html>
