<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
          crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <title>a.zork news</title>
</head>

<body>
<header>
    <div class="header_up">
        <div class="container">
            <div class="headercontent">
                <div class="logo_site">
                    <a href="{{ route('hello_page') }}">A.ZORK NEWS</a>
                    <p>LARAVEL learn project</p>
                </div>
                <div class="header_right">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item log_reg-button">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('local.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item log_reg-button">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('local.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown log_reg-button">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('account') }}">Account</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('local.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header_down">
        <div class="container">
            <div class="mainmenu">
                <ul>
                    <li><a href="{{ route('news') }}">News</a></li>
                    <li><a href="{{ route('categories') }}">Category</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>

    <div class="container">

        <div class="content">
            @yield('content')
        </div>


        <div class="sidebar">
            @yield('sidebar')
            <div class="side_block">
                <h3>Example</h3>
                <ul>
                    <li><a href="#">example</a></li>
                    <li><a href="#">example</a></li>
                    <li><a href="#">example</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>AlexeyZorkaltsev @ 2021</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
