<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','unknown page')</title>
        <link rel="stylesheet" href="{{ asset('css/master.css') }}"><!-- asset():enter public -->
    </head>
<body>
    {{-- start navbar --}}
    @include('layout.navbar')

    {{-- end navbar --}}
@yield('content')
@include('layout.sidepar')
</body>
</html>
