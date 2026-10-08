<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0 auto;
            max-width: 900px;
            padding: 24px;
            color: #243447;
        }

        nav {
            background: #1f6f8b;
            border-radius: 8px;
            padding: 14px;
        }

        nav a {
            color: #ffffff;
            margin-right: 12px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .page-image {
            border-radius: 12px;
            display: block;
            margin: 24px 0;
            max-width: 100%;
            width: 480px;
        }
    </style>
</head>

<body>

    <nav>
        <a href="{{ url('/halaman1') }}">Halaman 1</a> |
        <a href="{{ url('/halaman2') }}">Halaman 2</a> |
        <a href="{{ url('/halaman3') }}">Halaman 3</a> |
        <a href="{{ url('/halaman4') }}">Halaman 4</a> |
        <a href="{{ url('/halaman5') }}">Halaman 5</a>
    </nav>

    <hr>

    <img class="page-image" src="{{ asset('img/halaman-belajar.svg') }}" alt="Ilustrasi kegiatan belajar">

    @yield('content')

</body>

</html>
