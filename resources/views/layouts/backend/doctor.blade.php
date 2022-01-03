<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/adminty-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 15:06:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    @stack('css')
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="Theme-Logo" />
                        
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text"  class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="{{ asset('assets/images/avatar-4.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="{{ asset('assets/images/avatar-3.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="{{ asset('assets/images/avatar-4.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>{{ Auth::user()->name ?? 'N/A'}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('doctor.profile') }}">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="default/email-inbox.html">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="default/auth-lock-screen.html">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                            id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                    title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius"
                                            src="files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe" data-toggle="tooltip" data-placement="left"
                                    title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"
                                    data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('assets/images/avatar-4.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia"
                                    data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen"
                                    data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="files/assets/images/avatar-3.jpg"
                            alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5"
                                src="{{ asset('assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="default/index.html">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/dashboard-crm.html">
                                                <span class="pcoded-mtext">CRM</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dashboard-analytics.html">
                                                <span class="pcoded-mtext">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Vertical</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="default/menu-static.html">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="default/menu-header-fixed.html">
                                                        <span class="pcoded-mtext">Header Fixed</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="default/menu-compact.html">
                                                        <span class="pcoded-mtext">Compact</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="default/menu-sidebar.html">
                                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Horizontal</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="default/menu-horizontal-static.html" target="_blank">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="default/menu-horizontal-fixed.html" target="_blank">
                                                        <span class="pcoded-mtext">Fixed layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="default/menu-horizontal-icon.html" target="_blank">
                                                        <span class="pcoded-mtext">Static With Icon</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="default/menu-horizontal-icon-fixed.html" target="_blank">
                                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="default/menu-bottom.html">
                                                <span class="pcoded-mtext">Bottom Menu</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/box-layout.html" target="_blank">
                                                <span class="pcoded-mtext">Box Layout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/menu-rtl.html" target="_blank">
                                                <span class="pcoded-mtext">RTL</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="default/navbar-light.html">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/widget-statistic.html">
                                                <span class="pcoded-mtext">Statistic</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/widget-data.html">
                                                <span class="pcoded-mtext">Data</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/widget-chart.html">
                                                <span class="pcoded-mtext">Chart Widget</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Basic Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/alert.html">
                                                <span class="pcoded-mtext">Alert</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/breadcrumb.html">
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/button.html">
                                                <span class="pcoded-mtext">Button</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/box-shadow.html">
                                                <span class="pcoded-mtext">Box-Shadow</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/accordion.html">
                                                <span class="pcoded-mtext">Accordion</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/generic-class.html">
                                                <span class="pcoded-mtext">Generic Class</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/tabs.html">
                                                <span class="pcoded-mtext">Tabs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/color.html">
                                                <span class="pcoded-mtext">Color</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/label-badge.html">
                                                <span class="pcoded-mtext">Label Badge</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/progress-bar.html">
                                                <span class="pcoded-mtext">Progress Bar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/preloader.html">
                                                <span class="pcoded-mtext">Pre-Loader</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/list.html">
                                                <span class="pcoded-mtext">List</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/tooltip.html">
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/typography.html">
                                                <span class="pcoded-mtext">Typography</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/other.html">
                                                <span class="pcoded-mtext">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                                        <span class="pcoded-mtext">Advance Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/draggable.html">
                                                <span class="pcoded-mtext">Draggable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/bs-grid.html">
                                                <span class="pcoded-mtext">Grid Stack</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/light-box.html">
                                                <span class="pcoded-mtext">Light Box</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/modal.html">
                                                <span class="pcoded-mtext">Modal</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/notification.html">
                                                <span class="pcoded-mtext">Notifications</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/notify.html">
                                                <span class="pcoded-mtext">PNOTIFY</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/rating.html">
                                                <span class="pcoded-mtext">Rating</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/range-slider.html">
                                                <span class="pcoded-mtext">Range Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/slider.html">
                                                <span class="pcoded-mtext">Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/syntax-highlighter.html">
                                                <span class="pcoded-mtext">Syntax Highlighter</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/tour.html">
                                                <span class="pcoded-mtext">Tour</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="treeview.html">
                                                <span class="pcoded-mtext">Tree View</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/nestable.html">
                                                <span class="pcoded-mtext">Nestable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/toolbar.html">
                                                <span class="pcoded-mtext">Toolbar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/x-editable.html">
                                                <span class="pcoded-mtext">X-Editable</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                        <span class="pcoded-mtext">Extra Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/session-timeout.html">
                                                <span class="pcoded-mtext">Session Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/session-idle-timeout.html">
                                                <span class="pcoded-mtext">Session Idle Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/offline.html">
                                                <span class="pcoded-mtext">Offline</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="default/animation.html">
                                        <span class="pcoded-micon"><i
                                                class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Animations</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="default/sticky.html">
                                        <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                        <span class="pcoded-mtext">Sticky Notes</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                        <span class="pcoded-mtext">Icons</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/icon-font-awesome.html">
                                                <span class="pcoded-mtext">Font Awesome</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-themify.html">
                                                <span class="pcoded-mtext">Themify</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-simple-line.html">
                                                <span class="pcoded-mtext">Simple Line Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-ion.html">
                                                <span class="pcoded-mtext">Ion Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-material-design.html">
                                                <span class="pcoded-mtext">Material Design</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-icofonts.html">
                                                <span class="pcoded-mtext">Ico Fonts</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-weather.html">
                                                <span class="pcoded-mtext">Weather Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-typicons.html">
                                                <span class="pcoded-mtext">Typicons</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/icon-flags.html">
                                                <span class="pcoded-mtext">Flags</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Form Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/form-elements-component.html">
                                                <span class="pcoded-mtext">Form Components</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/form-elements-add-on.html">
                                                <span class="pcoded-mtext">Form-Elements-Add-On</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/form-elements-advance.html">
                                                <span class="pcoded-mtext">Form-Elements-Advance</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/form-validation.html">
                                                <span class="pcoded-mtext">Form Validation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="default/form-picker.html">
                                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                                        <span class="pcoded-mtext">Form Picker</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="default/form-select.html">
                                        <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                                        <span class="pcoded-mtext">Form Select</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="default/form-masking.html">
                                        <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                                        <span class="pcoded-mtext">Form Masking</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="default/form-wizard.html">
                                        <span class="pcoded-micon"><i class="feather icon-tv"></i></span>
                                        <span class="pcoded-mtext">Form Wizard</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                        <span class="pcoded-mtext">Ready To Use</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/ready-cloned-elements-form.html">
                                                <span class="pcoded-mtext">Cloned Elements Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-currency-form.html">
                                                <span class="pcoded-mtext">Currency Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-form-booking.html">
                                                <span class="pcoded-mtext">Booking Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-form-booking-multi-steps.html">
                                                <span class="pcoded-mtext">Booking Multi Steps Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-form-comment.html">
                                                <span class="pcoded-mtext">Comment Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-form-contact.html">
                                                <span class="pcoded-mtext">Contact Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-job-application-form.html">
                                                <span class="pcoded-mtext">Job Application Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-js-addition-form.html">
                                                <span class="pcoded-mtext">JS Addition Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-login-form.html">
                                                <span class="pcoded-mtext">Login Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-popup-modal-form.html" target="_blank">
                                                <span class="pcoded-mtext">Popup Modal Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-registration-form.html">
                                                <span class="pcoded-mtext">Registration Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-review-form.html">
                                                <span class="pcoded-mtext">Review Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-subscribe-form.html">
                                                <span class="pcoded-mtext">Subscribe Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-suggestion-form.html">
                                                <span class="pcoded-mtext">Suggestion Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/ready-tabs-form.html">
                                                <span class="pcoded-mtext">Tabs Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                        <span class="pcoded-mtext">Bootstrap Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/bs-basic-table.html">
                                                <span class="pcoded-mtext">Basic Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/bs-table-sizing.html">
                                                <span class="pcoded-mtext">Sizing Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/bs-table-border.html">
                                                <span class="pcoded-mtext">Border Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/bs-table-styling.html">
                                                <span class="pcoded-mtext">Styling Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-inbox"></i></span>
                                        <span class="pcoded-mtext">Data Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/dt-basic.html">
                                                <span class="pcoded-mtext">Basic Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-advance.html">
                                                <span class="pcoded-mtext">Advance Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-styling.html">
                                                <span class="pcoded-mtext">Styling</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-api.html">
                                                <span class="pcoded-mtext">API</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ajax.html">
                                                <span class="pcoded-mtext">Ajax</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-server-side.html">
                                                <span class="pcoded-mtext">Server Side</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-plugin.html">
                                                <span class="pcoded-mtext">Plug-In</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-data-sources.html">
                                                <span class="pcoded-mtext">Data Sources</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                                        <span class="pcoded-mtext">Data Table Extensions</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/dt-ext-autofill.html">
                                                <span class="pcoded-mtext">AutoFill</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Button</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="default/dt-ext-basic-buttons.html">
                                                        <span class="pcoded-mtext">Basic Button</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="default/dt-ext-buttons-html-5-data-export.html">
                                                        <span class="pcoded-mtext">Html-5 Data Export</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-col-reorder.html">
                                                <span class="pcoded-mtext">Col Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-fixed-columns.html">
                                                <span class="pcoded-mtext">Fixed Columns</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-fixed-header.html">
                                                <span class="pcoded-mtext">Fixed Header</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-key-table.html">
                                                <span class="pcoded-mtext">Key Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-responsive.html">
                                                <span class="pcoded-mtext">Responsive</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-row-reorder.html">
                                                <span class="pcoded-mtext">Row Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-scroller.html">
                                                <span class="pcoded-mtext">Scroller</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/dt-ext-select.html">
                                                <span class="pcoded-mtext">Select Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="default/foo-table.html">
                                        <span class="pcoded-micon"><i class="feather icon-hash"></i></span>
                                        <span class="pcoded-mtext">FooTable</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
                                        <span class="pcoded-mtext">Handson Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/handson-appearance.html">
                                                <span class="pcoded-mtext">Appearance</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-data-operation.html">
                                                <span class="pcoded-mtext">Data Operation</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-rows-cols.html">
                                                <span class="pcoded-mtext">Rows Columns</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-columns-only.html">
                                                <span class="pcoded-mtext">Columns Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-cell-features.html">
                                                <span class="pcoded-mtext">Cell Features</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-cell-types.html">
                                                <span class="pcoded-mtext">Cell Types</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-integrations.html">
                                                <span class="pcoded-mtext">Integrations</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-rows-only.html">
                                                <span class="pcoded-mtext">Rows Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/handson-utilities.html">
                                                <span class="pcoded-mtext">Utilities</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="default/editable-table.html">
                                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                        <span class="pcoded-mtext">Editable Table</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                                        <span class="pcoded-mtext">Charts</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/chart-google.html">
                                                <span class="pcoded-mtext">Google Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-echart.html">
                                                <span class="pcoded-mtext">Echarts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-chartjs.html">
                                                <span class="pcoded-mtext">ChartJs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-list.html">
                                                <span class="pcoded-mtext">List Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-float.html">
                                                <span class="pcoded-mtext">Float Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-knob.html">
                                                <span class="pcoded-mtext">Knob chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-morris.html">
                                                <span class="pcoded-mtext">Morris Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-nvd3.html">
                                                <span class="pcoded-mtext">Nvd3 Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-peity.html">
                                                <span class="pcoded-mtext">Peity Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-radial.html">
                                                <span class="pcoded-mtext">Radial Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-rickshaw.html">
                                                <span class="pcoded-mtext">Rickshaw Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-sparkline.html">
                                                <span class="pcoded-mtext">Sparkline Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/chart-c3.html">
                                                <span class="pcoded-mtext">C3 Chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                                        <span class="pcoded-mtext">Maps</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/map-google.html">
                                                <span class="pcoded-mtext">Google Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/map-vector.html">
                                                <span class="pcoded-mtext">Vector Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/map-api.html">
                                                <span class="pcoded-mtext">Google Map Search API</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/location.html">
                                                <span class="pcoded-mtext">Location</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="files/extra-pages/landingpage/index.html" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span>
                                        <span class="pcoded-mtext">Landing Page</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                        <span class="pcoded-mtext">Authentication</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/auth-normal-sign-in.html" target="_blank">
                                                <span class="pcoded-mtext">Login With BG Image</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-sign-in-social.html" target="_blank">
                                                <span class="pcoded-mtext">Login With Social Icon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-sign-in-social-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext">Login Social With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-normal-sign-in-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext">Login With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-sign-up.html" target="_blank">
                                                <span class="pcoded-mtext">Registration BG Image</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-sign-up-social.html" target="_blank">
                                                <span class="pcoded-mtext">Registration Social Icon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-sign-up-social-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext">Registration Social With Header And
                                                    Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-sign-up-header-footer.html" target="_blank">
                                                <span class="pcoded-mtext">Registration With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-multi-step-sign-up.html" target="_blank">
                                                <span class="pcoded-mtext">Multi Step Registration</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-reset-password.html" target="_blank">
                                                <span class="pcoded-mtext">Forgot Password</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-lock-screen.html" target="_blank">
                                                <span class="pcoded-mtext">Lock Screen</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/auth-modal.html" target="_blank">
                                                <span class="pcoded-mtext">Modal</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                        <span class="pcoded-mtext">Maintenance</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/error.html">
                                                <span class="pcoded-mtext">Error</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/comming-soon.html">
                                                <span class="pcoded-mtext">Comming Soon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/offline-ui.html">
                                                <span class="pcoded-mtext">Offline UI</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">User Profile</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/timeline.html">
                                                <span class="pcoded-mtext">Timeline</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/timeline-social.html">
                                                <span class="pcoded-mtext">Timeline Social</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/user-profile.html">
                                                <span class="pcoded-mtext">User Profile</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/user-card.html">
                                                <span class="pcoded-mtext">User Card</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                        <span class="pcoded-mtext">E-Commerce</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/product.html">
                                                <span class="pcoded-mtext">Product</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/product-list.html">
                                                <span class="pcoded-mtext">Product List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/product-edit.html">
                                                <span class="pcoded-mtext">Product Edit</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/product-detail.html">
                                                <span class="pcoded-mtext">Product Detail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/product-cart.html">
                                                <span class="pcoded-mtext">Product Card</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/product-payment.html">
                                                <span class="pcoded-mtext">Credit Card Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-mail"></i></span>
                                        <span class="pcoded-mtext">Email</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/email-compose.html">
                                                <span class="pcoded-mtext">Compose Email</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/email-inbox.html">
                                                <span class="pcoded-mtext">Inbox</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/email-read.html">
                                                <span class="pcoded-mtext">Read Mail</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Email Template</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="files/extra-pages/email-templates/email-welcome.html">
                                                        <span class="pcoded-mtext">Welcome Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="files/extra-pages/email-templates/email-password.html">
                                                        <span class="pcoded-mtext">Reset Password</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a
                                                        href="files/extra-pages/email-templates/email-newsletter.html">
                                                        <span class="pcoded-mtext">Newsletter Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="files/extra-pages/email-templates/email-launch.html">
                                                        <span class="pcoded-mtext">App Launch</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a
                                                        href="files/extra-pages/email-templates/email-activation.html">
                                                        <span class="pcoded-mtext">Activation Code</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">App</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" ">
                                    <a href="default/chat.html">
                                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                                        <span class="pcoded-mtext">Chat</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-globe"></i></span>
                                        <span class="pcoded-mtext">Social</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/fb-wall.html">
                                                <span class="pcoded-mtext">Wall</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/message.html">
                                                <span class="pcoded-mtext">Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                                        <span class="pcoded-mtext">Task</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/task-list.html">
                                                <span class="pcoded-mtext">Task List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/task-board.html">
                                                <span class="pcoded-mtext">Task Board</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/task-detail.html">
                                                <span class="pcoded-mtext">Task Detail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/issue-list.html">
                                                <span class="pcoded-mtext">Issue List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                                        <span class="pcoded-mtext">To-Do</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/todo.html">
                                                <span class="pcoded-mtext">To-Do</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/notes.html">
                                                <span class="pcoded-mtext">Notes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                                        <span class="pcoded-mtext">Gallery</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/gallery-grid.html">
                                                <span class="pcoded-mtext">Gallery-Grid</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/gallery-masonry.html">
                                                <span class="pcoded-mtext">Masonry Gallery</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/gallery-advance.html">
                                                <span class="pcoded-mtext">Advance Gallery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-search"></i><b>S</b></span>
                                        <span class="pcoded-mtext">Search</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/search-result.html">
                                                <span class="pcoded-mtext">Simple Search</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/search-result2.html">
                                                <span class="pcoded-mtext">Grouping Search</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                                        <span class="pcoded-mtext">Job Search</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/job-card-view.html">
                                                <span class="pcoded-mtext">Card View</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/job-details.html">
                                                <span class="pcoded-mtext">Job Detailed</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/job-find.html">
                                                <span class="pcoded-mtext">Job Find</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/job-panel-view.html">
                                                <span class="pcoded-mtext">Job Panel View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Extension</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file-plus"></i></span>
                                        <span class="pcoded-mtext">Editor</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/ck-editor.html">
                                                <span class="pcoded-mtext">CK-Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/wysiwyg-editor.html">
                                                <span class="pcoded-mtext">WYSIWYG Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/ace-editor.html">
                                                <span class="pcoded-mtext">Ace Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/long-press-editor.html">
                                                <span class="pcoded-mtext">Long Press Editor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
                                        <span class="pcoded-mtext">Invoice</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/invoice.html">
                                                <span class="pcoded-mtext">Invoice</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/invoice-summary.html">
                                                <span class="pcoded-mtext">Invoice Summary</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/invoice-list.html">
                                                <span class="pcoded-mtext">Invoice List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event Calendar</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="default/event-full-calender.html">
                                                <span class="pcoded-mtext">Full Calendar</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="default/event-clndr.html">
                                                <span class="pcoded-mtext">CLNDER</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="image-crop.html">
                                        <span class="pcoded-micon"><i class="feather icon-scissors"></i></span>
                                        <span class="pcoded-mtext">Image Cropper</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="default/file-upload.html">
                                        <span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span>
                                        <span class="pcoded-mtext">File Upload</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="default/change-loges.html">
                                        <span class="pcoded-micon"><i
                                                class="feather icon-briefcase"></i><b>CL</b></span>
                                        <span class="pcoded-mtext">Change Loges</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                        <span class="pcoded-mtext">Menu Levels</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Menu Level 2.1</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Menu Level 2.2</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)">
                                                        <span class="pcoded-mtext">Menu Level 3.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Menu Level 2.3</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="disabled">
                                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                                        <span class="pcoded-mtext">Disabled Menu</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="default/sample-page.html">
                                        <span class="pcoded-micon"><i class="feather icon-watch"></i></span>
                                        <span class="pcoded-mtext">Sample Page</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Support</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                                        <span class="pcoded-mtext">Documentation</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                                        <span class="pcoded-mtext">Submit Issue</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="./files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="./files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="./files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="./files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="./files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('bower_components/modernizr/modernizr.js') }}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('bower_components/chart.js/dist/Chart.js') }}"></script>
    <!-- amchart js -->
    <script src="{{ asset('assets/pages/widget/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/vartical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.min.js') }}"></script>
    @stack('script')
</body>


<!-- Mirrored from demo.dashboardpack.com/adminty-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 15:10:45 GMT -->
</html>