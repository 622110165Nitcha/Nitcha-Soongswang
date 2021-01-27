<html>
<head>
<meta charset="UTF-8">
<title>Nitcha's Books Store - @yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
</head>
<body>
    <header>
        <h1>@yield('title')</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&#xA9; Copyright Week-06, 2020 Nitcha's Books Store.</p>
    </footer>
</body>
</html>