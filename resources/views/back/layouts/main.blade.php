<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>{{ $title }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('back/assets/images/favicon.ico') }}">

  <!-- App css -->
  <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('back/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('back/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('back/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

  <script src="{{ asset('back/assets/js/modernizr.min.js') }}"></script>

  <!-- Script Ajax -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  {{-- Link FontAwesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"   />
  {{-- Sweatalert --}}
  {{-- <link rel="stylesheet" href="{{ asset('/back/assets/css/sweetalert2/sweetalert2.min.css') }}"> --}}

  {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>


<body>
  @include('sweetalert::alert')
  <!-- Begin page -->
  <div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <x-back.sidebar />
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

      <!-- Top Bar Start -->
      <x-back.navbar />
      <!-- Top Bar End -->



      <!-- Start Page content -->
      <div class="content">
        <div class="container-fluid">

          {{ $slot }}

        </div> <!-- container -->

      </div> <!-- content -->

      <x-back.footer />

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


  </div>
  <!-- END wrapper -->



  <!-- jQuery  -->
  <script src="{{ asset('back/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('back/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('back/assets/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('back/assets/js/waves.js') }}"></script>
  <script src="{{ asset('back/assets/js/jquery.slimscroll.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('back/assets/js/jquery.core.js') }}"></script>
  <script src="{{ asset('back/assets/js/jquery.app.js') }}"></script>


  <!-- Sweetalert -->
  <script src="{{ asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

  {{-- JS --}}
  <script src="{{ asset('/back/js/myCustom.js') }}"></script>>

  {{-- Datatables --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js">
  </script>
</body>
</html>