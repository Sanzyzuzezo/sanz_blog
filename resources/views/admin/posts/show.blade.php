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
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
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
          <!-- row end -->
          <div class="container">
            <div class="row my-3 ">
             <div class="col-md-8">
              <h1 class="mb-3">{{ $post->title }}</h1>
              <a class="btn btn-success" href="/admin/posts" class="d-block mt-3"> <span class="mdi mdi-arrow-left-thick">Back to All MyPosts</span></a>
              <a class="btn btn-warning" href="/admin/posts/{{ $post->slug }}/edit" class="d-block mt-3"><span class="mdi mdi-pencil">Edit</span></a>
              <form action="/admin/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Apa kamu yakin ingin menghapus post ini?')">
                <span class="mdi mdi-delete"></span>Delete</button>
                </form>
                @if ($post->image)
                <div class="">
                <img src="{{ asset('admin/post/image/'. $post->image) }}" class="card-img-top mt-3" alt="">
                </div>
                <article class="my-3 fs-5">
                @else
                <img src="https://source.unsplash.com/random/500x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                @endif
                {!! $post->body !!}
               </article>
             </div>
            </div>
           </div>
     
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