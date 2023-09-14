<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.header')

<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
   @include('admin.layouts.sidebar')
    <!-- partial -->
   @yield('container')
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
  <script src="{{ ('spica/js/off-canvas.js') }}"></script>
  <script src="{{ ('spica/js/hoverable-collapse.js') }}"></script>
  <script src="{{ ('spica/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ ('spica/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>