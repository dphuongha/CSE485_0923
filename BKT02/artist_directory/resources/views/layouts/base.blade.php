<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">
    
</head>
<body>
    <!-- Header: Giong nhau -->
    @include('layouts.header') 
    <!-- Include trong header vao day -->

    <!-- Main: Khac nhau -->
    @yield('main')



    <!-- Footer: Giong nhau -->
    @include('layouts.footer')
    <script src="{{asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>