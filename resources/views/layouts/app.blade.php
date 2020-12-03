<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Hotel') }}</title> --}}
    <title>TTT</title>

    <!-- CDN Outsider -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}">
    <script defer src="{{ asset('https://code.getmdl.io/1.3.0/material.min.js')}}"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/mdlui.css')}}" rel="stylesheet">
    <link href="{{ asset('css/appsys.css') }}" rel="stylesheet">

</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">

                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
                    <i class="material-icons">messenger</i>
                </button>
                <div class="mdl-layout-spacer"></div>

                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">home</i>
                </button>
                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">notifications</i>
                </button>
                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">info</i>
                </button>

                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">lock</i>
                </button>

            </div>
        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
                <img src="Image/logo.png" class="demo-avatar">
                <div class="demo-avatar-dropdown">
                <span style="font-size: 24px">
                    @auth
                        {{ Auth::user()->name }}
                    @endauth
                </span>
                <div class="mdl-layout-spacer"></div>

                </div>
            </header>
            <ul class="demo-list-item mdl-list">
                @guest
                    <li class="mdl-list__item">
                        <a href="{{ route('login') }}" style="width: 100%">
                            <button class="mdl-button mdl-js-button mdl-button--raised m-md-0" style="width: 100%">
                                {{ __('Login') }}
                            </button>
                        </a>
                    </li>
                    @if (Route::has('register'))
                    <li class="mdl-list__item">
                        <a href="{{ route('register') }}" style="width: 100%">
                            <button class="mdl-button mdl-js-button mdl-button--raised m-md-0" style="width: 100%" >
                                {{ __('Register') }}
                            </button>
                        </a>
                    </li>
                    @endif
                @else
                    <li class="mdl-list__item">
                        <a href="{{ route('logout') }}" style="width: 100%" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <button class="mdl-button mdl-js-button mdl-button--raised ml-auto" style="width: 100%">
                                {{ __('Logout') }}
                            </button>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">

                @if(Auth::check())
                    @if(Auth::user()->hasRole(['admin']))
                        @include('roles.admin')
                    @endif
                    @if(Auth::user()->hasRole(['manager']))
                        @include('roles.manager')
                    @endif
                    @if(Auth::user()->hasRole(['staff']))
                        @include('roles.staff')
                    @endif
                    @if(Auth::user()->hasRole(['renter']))
                        @include('roles.renter')
                    @endif
                    @if(Auth::user()->hasRole(['owner']))
                        @include('roles.owner')
                    @endif
                @endif

            </nav>
        </div>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="py-4 px-4">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
