<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Remote Doctor</title>
 
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
 
    <!-- Fonts -->
   <!--  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">y
</head>
<body>
   
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="header">
            <div class="header-left">
                <a href="home" class="logo">
                    <img src="{{asset('assets/img/logo.png')}}" width="35" height="35" alt=""> <span>Remote Doctor</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                        
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>{{Auth::user()->name}}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
        </nav>
        @php
        $curl=url()->current();
        @endphp
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Branch Admin Dashboard</li>
                        <li @if(strstr($curl,"admin"))
                             class="active"
                             @endif>
                            <a href="{{url('Branch_Admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li @if(strstr($curl,"doctor"))
                             class="active"
                             @endif>
                            <a href="{{url('avldoctor')}}"><i class="fa fa-user-md"></i> <span>Available Doctors</span></a>
                        </li>
                        <li>
                            <a href="patientinfo"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="appointment"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li @if(strstr($curl,"schedule"))
                             class="active"
                             @endif>
                            <a href="Doctor_schedule"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                          <li @if(strstr($curl,"email"))
                             class="active"
                             @endif>
                            <a href="{{url('#')}}"><i class="fa fa-envelope"></i> <span>Email</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
</div>
<main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="sidebar-overlay" data-reff=""></div> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/Chart.bundle.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/chart.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/app.js')}}"></script>
</body>
</html>