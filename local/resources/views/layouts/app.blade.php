<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin {{ \Config::get('app.title') }} @yield('title')</title>
    @include('include.css')
    <!-- Styles -->
</head>
@php
  if (Auth::user()->role == 'admin') {
    $picture = 'https://lh3.googleusercontent.com/rfHMSlyQw8uMg2h4do6Pj88BR10pO93-rNqXSqnNPbOtM2Qse1dnCh_yZWltp8xL6w=w300';
  }elseif (Auth::user()->role == 'librarian') {
    $picture = 'https://d30y9cdsu7xlg0.cloudfront.net/png/170226-200.png';
  }else {
    $picture = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoPCXtshjcV4WVVqBBp_ZYWk4j-xTPUP-Nh5zKqsc7clbxUzi83A';
  }
@endphp
<body class="hold-transition skin-blue-light sidebar-mini">
  <div  id="app-vue">
    <div class="wrapper">
        <header class="main-header">
          <!-- Logo -->
          <a href="{{url('/')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>{{\Config::get('app.sort_name')}}</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b> {{\Config::get('app.title')}}</span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                {{-- <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="{{$picture}}" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Support Team
                              <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="{{asset('admin/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              AdminLTE Design Team
                              <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="{{asset('admin/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Developers
                              <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="{{asset('admin/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Sales Department
                              <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="{{asset('admin/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Reviewers
                              <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Design some buttons
                              <small class="pull-right">20%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Create a nice theme
                              <small class="pull-right">40%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Some task I need to do
                              <small class="pull-right">60%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Make beautiful transitions
                              <small class="pull-right">80%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                      </ul>
                    </li>
                    <li class="footer">
                      <a href="#">View all tasks</a>
                    </li>
                  </ul>
                </li> --}}
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{$picture}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{Auth::user()->name}}</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="{{$picture}}" class="img-circle" alt="User Image">

                      <p>
                        {{Auth::user()->name}}
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="{{url('admin/profile/'.Auth::user()->id)}}" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                {{-- <li>
                  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> --}}
              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="{{$picture}}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
              </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
              @include('layouts.nav')
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
            <h1 class="Cap">
              @yield('title')
            </h1>
            <ol class="breadcrumb">
              <li class="active Cap"><a href="{{url('/')}}/@yield('title')"><i class="fa fa-dashboard"></i> @yield('title')</a></li>
            </ol>
          </section>
              @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          {{-- <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
          </div> --}}
          <strong>Copyright &copy; 2017 <a href="http://rizkipadhil.dawnesia.com">Admin {{\Config::get('app.title')}}</a>.</strong> All rights
          reserved.
        </footer>
        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
    </div>
  </div>

    <!-- Scripts -->
    @include('include.js')
</body>
</html>
