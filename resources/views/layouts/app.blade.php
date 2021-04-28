<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="domain" content="{{ URL::to('') }}">
<meta name="theme-color" content="#000">
<title>MaGICX Communication</title>

<!-- App favicon -->
<link rel="shortcut icon" href="{{URL::to('icons/icon-72x72.png')}}">

<link rel="stylesheet" type="text/css" href="{{URL::to('styles/bootstrap.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{URL::to('fonts/css/fontawesome-all.min.css')}}">
<link rel="manifest" href="{{URL::to('_manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{URL::to('app/icons/icon-192x192.png')}}">

<style>
    body {
    overscroll-behavior-y: contain;
}
</style>
@stack('styles')
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="preloader"></div>

<div id="page">
    <div class="header header-fixed header-logo-center">

        @if (isset($topBarTitle))
            <a href="index.html" class="header-title">{{$topBarTitle}}</a>
        @else
            <a href="#" class="header-title">Undefined</a>
        @endif

        @if (isset($topBarPrevUrl))
            <a href="#" data-back-button="" class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        @else
            
        @endif
        
        <a href="#" data-toggle-theme="" class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-1">

        <a id="home" href="home" class="active-nav"><i class="fa fa-home"></i><span>Home</span></a>
        <a id="chat" href="chat"><i class="fas fa-comments"></i><span>Chat</span></a>
        <a id="meet" href="meet"><i class="fas fa-video"></i><span>Meeting</span></a>
        <a id="file" href="index-search.html"><i class="fas fa-folder"></i><span>My File</span></a>
        <a id="setting" href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Settings</span></a>

    </div>

    <div class="page-content header-clear-medium">
      
        <input type="hidden" name="allow_sw" id="allow_sw" value="true">

            @yield('content')
        
    </div>

    @yield('content2')

    <div id="menu-settings" class="menu menu-box-bottom menu-box-detached">
        <div class="menu-title mt-0 pt-0"><h1>Settings</h1><p class="color-highlight">Flexible and Easy to Use</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="list-group list-custom-small">
                <a href="#" data-toggle-theme="" data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
                <i class="fa font-12 fa-moon rounded-s bg-brown-dark color-white me-3"></i>
                <span>Dark Mode</span>
                <div class="custom-control scale-switch ios-switch">
                    <input data-toggle-theme="" type="checkbox" class="ios-input" id="switch-dark-mode">
                    <label class="custom-control-label" for="switch-dark-mode"></label>
                </div>
                <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <div class="list-group list-custom-large">
                <a data-menu="menu-highlights" href="#">
                <i class="fa font-14 fa-tint bg-green-dark rounded-s"></i>
                <span>Page Highlight</span>
                <strong>16 Colors Highlights Included</strong>
           
                <i class="fa fa-angle-right"></i>
                </a>
                <a data-menu="menu-backgrounds" href="#" class="border-0">
                <i class="fa font-14 fa-cog bg-blue-dark rounded-s"></i>
                <span>Background Color</span>
                <strong>10 Page Gradients Included</strong>
           
                <i class="fa fa-angle-right"></i>
                </a>
                </div>
            <div class="list-group list-custom-small">
                
            
                    
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    
                    <button type="submit" class="btn btn-xxs w-100 rounded-s btn-full mb-3 text-uppercase font-900 shadow-s bg-red-dark" style="margin-top:10px"><i class="fas fa-sign-out-alt " style="line-height: 25px;"></i>&nbsp;&nbsp;Log Out</button>
                </form>

            </div>
        </div>
    </div>


    <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached">
        <div class="menu-title"><h1>Highlights</h1><p class="color-highlight">Any Element can have a Highlight Color</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
        <div class="highlight-changer">
        <a href="#" data-change-highlight="blue"><i class="fa fa-circle color-blue-dark"></i><span class="color-blue-light">Default</span></a>
        <a href="#" data-change-highlight="red"><i class="fa fa-circle color-red-dark"></i><span class="color-red-light">Red</span></a>
        <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span class="color-orange-light">Orange</span></a>
        <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span class="color-pink-dark">Pink</span></a>
        <a href="#" data-change-highlight="magenta"><i class="fa fa-circle color-magenta-dark"></i><span class="color-magenta-light">Purple</span></a>
        <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span class="color-aqua-light">Aqua</span></a>
        <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span class="color-teal-light">Teal</span></a>
        <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span class="color-mint-light">Mint</span></a>
        <a href="#" data-change-highlight="green"><i class="fa fa-circle color-green-light"></i><span class="color-green-light">Green</span></a>
        <a href="#" data-change-highlight="grass"><i class="fa fa-circle color-green-dark"></i><span class="color-green-dark">Grass</span></a>
        <a href="#" data-change-highlight="sunny"><i class="fa fa-circle color-yellow-light"></i><span class="color-yellow-light">Sunny</span></a>
        <a href="#" data-change-highlight="yellow"><i class="fa fa-circle color-yellow-dark"></i><span class="color-yellow-light">Goldish</span></a>
        <a href="#" data-change-highlight="brown"><i class="fa fa-circle color-brown-dark"></i><span class="color-brown-light">Wood</span></a>
        <a href="#" data-change-highlight="night"><i class="fa fa-circle color-dark-dark"></i><span class="color-dark-light">Night</span></a>
        <a href="#" data-change-highlight="dark"><i class="fa fa-circle color-dark-light"></i><span class="color-dark-light">Dark</span></a>
        <div class="clearfix"></div>
        </div>
        <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
        </div>
        </div>
        
        <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached">
        <div class="menu-title"><h1>Backgrounds</h1><p class="color-highlight">Change Page Color Behind Content Boxes</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
        <div class="background-changer">
        <a href="#" data-change-background="default"><i class="bg-theme"></i><span class="color-dark-dark">Default</span></a>
        <a href="#" data-change-background="plum"><i class="body-plum"></i><span class="color-plum-dark">Plum</span></a>
        <a href="#" data-change-background="magenta"><i class="body-magenta"></i><span class="color-dark-dark">Magenta</span></a>
        <a href="#" data-change-background="dark"><i class="body-dark"></i><span class="color-dark-dark">Dark</span></a>
        <a href="#" data-change-background="violet"><i class="body-violet"></i><span class="color-violet-dark">Violet</span></a>
        <a href="#" data-change-background="red"><i class="body-red"></i><span class="color-red-dark">Red</span></a>
        <a href="#" data-change-background="green"><i class="body-green"></i><span class="color-green-dark">Green</span></a>
        <a href="#" data-change-background="sky"><i class="body-sky"></i><span class="color-sky-dark">Sky</span></a>
        <a href="#" data-change-background="orange"><i class="body-orange"></i><span class="color-orange-dark">Orange</span></a>
        <a href="#" data-change-background="yellow"><i class="body-yellow"></i><span class="color-yellow-dark">Yellow</span></a>
        <div class="clearfix"></div>
        </div>
        <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
        </div>
        </div>


    

</div>

<script type="text/javascript" src="{{URL::to('scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('scripts/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('scripts/moment.js')}}"></script>
<script type="text/javascript" src="{{URL::to('scripts/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::to('scripts/external_api.js')}}"></script>


@stack('scripts')

</body>
</html>