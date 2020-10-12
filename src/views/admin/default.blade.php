<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/posts-manager/css/style.css') }}">

    {{-- <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> --}}


</head>
<body>


    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="{{ route('admin.index') }}">
                <h4 class="text-white">{{ config('app.name', 'Laravel') }}</h4>
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div style="padding-top: 20px;" class="sidebar-menu">
                <ul id="accordion-menu">
                    <li>
                        <a href="{{ route('admin.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Catégories</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="min-height-200px">
            @yield('content')
            </div>
        </div>
    </div>
    <footer style="margin-top: 200px;">
        <div class="footer-copy-right">
            <p class="text-center">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </p>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    @yield('script')
    <script src="//code.jquery.com/jquery.js"></script>
    @include('flashy::message')
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>
</html>
