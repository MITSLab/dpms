<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>
            @yield('title')
        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta content="A premium admin dashboard template by mannatthemes" name="description">
        <meta content="Mannatthemes" name="author">
        @include('layouts.__link')
    </head>

    <body>
        <!-- Top Bar Start -->
        @include('layouts.__topbar')
        <!-- Top Bar End -->
        <!-- Header -->
        @include('layouts.__header')
        <!-- Header End -->
        <div class="page-wrapper">
            <!-- Navbar -->
            @include('layouts.__navbar')
            <!-- Navbar End -->
            <!-- Page Content-->
            @yield('content')
            <!-- Page Content End -->
        </div><!-- end page-wrapper -->
        @include('layouts.__script')
    </body>

</html>
