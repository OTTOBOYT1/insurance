<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Insurance</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('owners.index') }}">
            Insurance
        </a>
    </div>
</nav>

<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>
