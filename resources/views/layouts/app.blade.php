<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>@yield('title')</title>

    <!--bootstrap css-->
    @include('includes.style')
    
    <!--css-->
    @yield('styling')
   
</head>

<body>
    <!-- todo Navbar -->
    @include('includes.navbar')
    <!--end navbar-->

    <!--section1 -->
    @yield('content')
    <!--end section-->

    <!--footer-->
    @include('includes.footer')
<!--end footer-->
   
    @include('includes.scripts')
</body>

</html>