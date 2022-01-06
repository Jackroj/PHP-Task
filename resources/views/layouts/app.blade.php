<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.assets')
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        @yield('content')
    </div>

</body>
</html>