<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('include.endUser.style')

    @stack('add-style')

    <title>@yield('title')</title>
</head>

<body>

    @include('include.endUser.checkNav')

    @yield('content')


    <!-- Optional JavaScript; choose one of the two! -->

    @include('include.endUser.script')

    @stack('add-script')
</body>

</html>
