<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('spica/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('spica/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('spica/css/style.css')  }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('spica/images/favicon.png') }}" />
  <style>
    .navbar {
      height: 110px;
    }
  </style>
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category ">
          <p>Halaman Admin</p>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin">
            <i class="mdi mdi-home" ></i>
            <span class="menu-title"> Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/posts">
            <i class="mdi mdi-note-text" ></i>
            <span class="menu-title"> MyPosts</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <h4 class="font-weight-bold mb-2 d-none d-md-block mt-1">Halaman Dashboard</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link mdi mdi-account-circle" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">{{ auth()->user()->name }}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                      <i class="mdi mdi-settings text-primary"></i>
                      Settings
                    </a>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="mdi mdi-logout text-primary"></i>
                        Logout</button>
                    </form>
                  </div>
                </li>
                <li class="nav-item">
                 <i class="mdi mdi-library-books"></i>
                </li>
              </ul>
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">@php
                  echo date('l, d-m-Y');
              @endphp </h4>
            </li>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
      </nav>
      <!-- partial -->
             
          
          <!-- row end -->
     
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{ asset('spica/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('spica/vendors/chart.js/Chart.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('spica/js/off-canvas.js') }}"></script>
  <script src="{{ asset('spica/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('spica/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('spica/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>