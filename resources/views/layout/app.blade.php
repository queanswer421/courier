<!doctype html>
<html lang="en">

    <head>
 
        <!-- App title -->
        <title>CMS|| Dashboard</title>

        <!--Morris Chart CSS -->
		{{-- <link rel="stylesheet" href="../plugins/morris/morris.css"> --}}

        <!-- Switchery css -->
        {{-- <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" /> --}}

        <!-- Bootstrap CSS -->
        <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">

        <!-- App CSS -->
        <link href={{ asset('css/style.css') }} rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"> 
        <!-- Modernizr js -->
        {{-- <script src="assets/js/modernizr.min.js"></script> --}}

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            @include('layout.header');
            @include('layout.left');


            <!-- ========== Left Sidebar Start ========== -->
            


                @yield('content')

            </div>
           
            @include('layout.footer')

        </div>
        <!-- END wrapper -->


        {{-- <script>
            var resizefunc = [];
        </script> --}}

        <!-- jQuery  -->
        <script src={{ asset('js/jquery.min.js')}}></script>
        <script src={{ asset('js/bootstrap.bundle.min.js')}}></script>
        {{-- <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script> --}}

        <!--Morris Chart-->
		{{-- <script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael.min.js"></script> --}}

        <!-- Counter Up  -->
        {{-- <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.js"></script> --}}

        <!-- Page specific js -->
        <script src={{ asset('js/jquery.dashboard.js')}}></script>

        <!-- App js -->
        <script src={{ asset('js/jquery.core.js')}}></script>
        <script src={{ asset('js/jquery.app.js')}}></script>

        
    </body>
</html>