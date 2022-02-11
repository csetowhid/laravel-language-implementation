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
                                 @if (!empty(session()->get('locale')))
                                 <h4 style="text-decoration: none;">
                                    {{languages(session()->get('locale'))}}
                                 </h4>
                                 @else 
                                 <h4 style="text-decoration: none;">
                                    {{languages(app()->getLocale())}}
                                </h4>
                                 @endif
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0">Choose Language</h6>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8"></span>
                                    <a href="lang/en">USA</a>
                                </button>
                   
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8"></span> <a href="lang/fr">France</a> 
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8"></span><a href="lang/es">Spain</a> 
                                </button>
                       
                            </div>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
        </div>
  
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tabs-animation">
                        <div class="mb-3 card">
                            <p>{{ __("message.title") }}</p>
                            <p>{{ __("message.name") }}</p>
                            <p>{{ __("message.email") }}</p>
                            <p>{{ __("message.password") }}</p>
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