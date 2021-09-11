<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>a.zork news</title>
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
        <div class="container">
            <div class="mainmenu">
                <ul>
                    <li><a href="{{ route('news') }}">News</a></li>
                    <li><a href="{{ route('categories') }}">Category</a></li>
                    <li><a href="{{ route('admin.main') }}">Admin panel</a></li>
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
</body>

</html>
