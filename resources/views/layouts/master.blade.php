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
        @include('layouts.partials.admin.__link')
    </head>

    <body>
        <!-- Top Bar Start -->
        @include('layouts.partials.admin.__topbar')
        <!-- Top Bar End -->

        <!-- Header -->
        @include('layouts.partials.admin.__header')
        <!-- Header End -->

        <div class="page-wrapper">
            <!-- Navbar -->
            @include('layouts.partials.admin.__navbar')
            <!-- Navbar End -->

            <!-- Page Content-->
            <div class="page-content">
                @yield('content')
            </div>
            <!-- Page Content End -->
        </div>
        <!-- end page-wrapper -->

        <!-- Footer -->
        @include('layouts.partials.admin.__footer')
        <!-- Footer End -->

        @include('layouts.partials.admin.__script')
    </body>
</html>
