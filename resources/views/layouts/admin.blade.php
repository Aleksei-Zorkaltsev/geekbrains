<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <title>Admin Panel</title>
</head>

<body>
<header>
    <div class="header_up">
        <div class="container">
            <div class="headercontent">
                <div class="logo_site">
                    <a href="{{ route('home') }}">A.ZORK NEWS</a>
                    <p>LARAVEL learn project</p>
                </div>
                <div class="header_right">
                    <a href="{{ route('auth') }}">Log in</a>
                    <a href="{{ route('auth') }}">Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header_down">
    </div>
</header>
<main>
    <div class="admin_panel">
        <div class="admin_sidebar">
            <a href="{{route('admin.main')}}"><h2>ADMINISTRATE PANEL</h2></a>
            <ul>
                <li @if(request()->routeIs('admin.news*')) class="active" @endif><a href="{{ route('admin.news') }}">News</a></li>
                <li @if(request()->routeIs('admin.categories*')) class="active" @endif><a href="{{ route('admin.categories') }}">Categories</a></li>
                <li @if(request()->routeIs('admin.feedback*')) class="active" @endif><a href="{{ route('admin.feedback') }}">Feedback</a></li>
            </ul>
        </div>

        <div class="admin_content">
            @yield('content')
        </div>
    </div>
</main>

<footer>
    <p>AlexeyZorkaltsev @ 2021</p>
</footer>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">
</script>
@stack('js')

</body>
</html>
