<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe4e1;
            color: #4b0082;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #ff69b4;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        nav {
            background-color: #ff1493;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #ff1493;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .card {
            background-color: white;
            border: 2px solid #ff69b4;
            border-radius: 8px;
            padding: 20px;
            margin: 10px auto;
            width: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Afifah Store</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/category/food-beverage') }}">Food & Beverage</a>
        <a href="{{ url('/category/beauty-health') }}">Beauty & Health</a>
        <a href="{{ url('/category/home-care') }}">Home Care</a>
        <a href="{{ url('/category/baby-kid') }}">Baby & Kid</a>
        <a href="{{ url('/sales') }}">Sales</a>
        <a href="{{ url('/user/1/name/JohnDoe') }}">User Profile</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 POSJS2 - Powered by Laravel</p>
    </footer>
</body>
</html>
