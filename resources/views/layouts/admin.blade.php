<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h2>ADMINISTRATE PANEL</h2>
            <ul>
                <li><a href="{{ route('admin.news') }}">News</a></li>
                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
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
</body>

</html>
