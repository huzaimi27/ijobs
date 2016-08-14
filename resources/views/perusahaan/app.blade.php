<!DOCTYPE html>
<html lang="en">
    <head>
        @include('perusahaan/lib/header')
    </head>
    <body class="navbar-top">

        @include('perusahaan/lib/navbar')

        <!-- Page container -->
        <div class="page-container">
            <!-- Page content -->
            <div class="page-content">
                @include('perusahaan/lib/sidebar')
                <!-- Main content -->
                <div class="content-wrapper">
                    @include('perusahaan/lib/sub-header')
                    <!-- Content area -->
                    <div class="content">

                        @yield('content')

                        
                        <!-- //content -->

                        <!-- Footer -->
                        <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                            <div class="container-fluid">
                                <ul class="nav navbar-nav no-border visible-xs-block">
                                    <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i class="icon-circle-up2"></i></a></li>
                                </ul>

                                <div class="navbar-collapse collapse" id="navbar-second">
                                    <div class="navbar-text">
                                        &copy; 2015. <a href="#">Ijobs.com </a> by <a href="{{url('/')}}" target="_blank">Ijobs.com</a>
                                    </div>

                                    <div class="navbar-right">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">Logout</a></li>
                                            <li><a href="{{url('admin/account')}}" class="text-semibold">Pengaturan akun</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /content area -->
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
        </div>
        <!-- /page container -->

        {{-- <script type="text/javascript" src="{{ asset('administrator/js/jquery.js') }}"></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('administrator/js/jquery-2.2.4.min.js') }}"></script> --}}
        <script type="text/javascript" src="{{ asset('administrator/js/dropdown.js') }}"></script>
        {{-- sweat alert --}}
        <script src="{{ asset('administrator/js/sweetalert.min.js') }}"></script>
        <!-- message  sweat alert-->
        @if (Session::has('flash_notification.message')) 
        <script type="text/javascript">    
            swal({
                title:"{{ Session::get('flash_notification.message') }}",
                type:"{{ Session::get('flash_notification.level') }}",
                showConfirmButton: false,
                timer: 1000,
            });
        </script>
        @endif

    </body>
</html>
