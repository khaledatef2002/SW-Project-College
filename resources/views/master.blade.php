<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    @include('partials.navbar')

    @yield('content')

    <!-- Bootstrap JS (Optional) -->
    <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
</body>
</html>
