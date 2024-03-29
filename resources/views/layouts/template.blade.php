<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/style.min.css') }}">
    @yield('link')
    <title>{{ $title ?? 'Document' }}</title>
</head>
<body class="bg-light">
    @yield('content')
    <script src="{{ url('js/all.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>
</html>
