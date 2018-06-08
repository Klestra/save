<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
    <title>Coinfig</title>
   <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />
</head>
<body>
    <header>
        @include('parts/header')
    </header>
    <main>
    <section class="main-content">
        @yield('content')
    </section>
    </main>
</body>
</html>