<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel - Localization</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('backend/css/main.css')}}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-dots">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-focus"></span>
                                    @php $locale = session()->get('locale'); @endphp
                                    @switch($locale)
                                    @case('es')
                                    <span class="language-icon opacity-8 flag large ES"></span>
                                    @break
                                    @case('fr')
                                    <span class="language-icon opacity-8 flag large FR"></span>
                                    @break
                                    @default
                                    <span class="language-icon opacity-8 flag large US"></span>
                                    @endswitch
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                         
                                        <div class="menu-header-content text-center text-white">
                                            @if (!empty(session()->get('locale')))
                                            <h6 style="text-decoration: none;">
                                                {{languages(session()->get('locale'))}}
                                            </h6>
                                            @else 
                                            <h6 class="menu-header-subtitle mt-0"> {{languages(app()->getLocale())}}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span>
                                    <a href="lang/en">USA</a>
                                </button>
             
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span>
                                    <a href="lang/fr">Frence</a>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span><a href="lang/es">Spain</a> 
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{asset('backend/images/avatars/towhid.png')}}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Towhid Hasan</div>
                                                                    <div class="widget-subheading opacity-8">A short profile description</div>
                                                                </div>
                                                                {{-- <div class="widget-content-right mr-2">
                                                                    <form method="POST" action="{{ route('logout') }}">
                                                                        @csrf
                                                                    <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="{{route('logout')}}" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">Logout</a>
                                                                    </form>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover Password</a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> Towhid Hasan </div>
                                    <div class="widget-subheading"> Backend Engineer </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                    </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">{{ __("Menu") }}</li>
                            <li class="mm-active">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-rocket"></i>{{ __("Dashboards") }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-browser"></i>{{ __("Pages") }}
                                </a>
                            </li>
                            <li class="app-sidebar__heading">{{ __("UI Components") }}</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i> {{ __("Elements") }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i>{{ __("Components") }} 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>874</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">{{ __("Sales Last Month") }}</h6>
                                        </div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>1283</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">{{ __("Sales Income") }}</h6>
                                        </div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>1286</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">{{ __("Last month sales") }}</h6>
                                        </div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>564</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">{{ __("Total revenue") }}</h6>
                                        </div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                            <i class="lnr-laptop-phone text-dark opacity-8"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">{{ __("Cash Deposits") }}</div>
                                            <div class="widget-numbers">1.7M</div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                            <i class="lnr-graduation-hat text-white"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">{{ __("Invested Dividents") }}</div>
                                            <div class="widget-numbers"><span>9M</span></div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                            <i class="lnr-apartment text-white"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">{{ __("Capital Gains") }}</div>
                                            <div class="widget-numbers text-success"><span>$563</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i> {{ __("Technical Support") }}
                                        </div>
                                    </div>
                                    <div class="p-0 card-body">
                                        <div class="p-1 slick-slider-sm mx-auto">
                                            <div class="slick-slider">
                                                <div>
                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-title opacity-5 text-muted text-uppercase">{{ __("New Accounts since") }} 2018</div>
                                                                </div>
                                                                <div class="widget-numbers">
                                                                    <div class="widget-chart-flex">
                                                                        <div>
                                                                            <span class="opacity-10 text-success pr-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </span>
                                                                            <span>78</span>
                                                                            <small class="opacity-5 pl-1">%</small>
                                                                        </div>
                                                                        <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                            <span class="text-success pl-2">+14</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-title opacity-5 text-muted text-uppercase"> Last Year Total Sales</div>
                                                                </div>
                                                                <div class="widget-numbers">
                                                                    <div class="widget-chart-flex">
                                                                        <div>
                                                                            <small class="opacity-3 pr-1">$</small>
                                                                            <span>629</span>
                                                                            <span class="text-primary pl-3">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
                                                                </div>
                                                                <div class="widget-numbers">
                                                                    <div class="widget-chart-flex">
                                                                        <div>
                                                                            <span class="text-warning">34</span>
                                                                        </div>
                                                                        <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                            <span class="opacity-5 text-muted pl-2 pr-1">5%</span> increase
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"></i>{{ __("Timeline Example") }}
                                        </div>
                                    </div>
                                    <div class="scroll-area-lg">
                                        <div class="scrollbar-container">
                                            <div class="p-4">
                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("All Hands Meeting") }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>{{ __("Yet another one") }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("Build the production release") }}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("Something not important") }}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("This dot has an info state") }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("All Hands Meeting") }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>{{ __("Yet another one") }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("Build the production release") }}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">
                                                                    {{ __("Something not important") }}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("This dot has an info state") }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("All Hands Meeting") }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>{{ __("Yet another one") }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("Build the production release") }}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">
                                                                    {{ __("Something not important") }}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">{{ __("This dot has an info state") }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>

    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="{{asset('backend/scripts/main.js')}}"></script>
</body>
</html>