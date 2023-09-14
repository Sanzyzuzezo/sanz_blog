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
  {{-- trix editor --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
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
          <div class="col-lg-8 mt-5">
            <h1>Edit Post</h1>
            <a class="btn btn-dark" href="/admin/posts" class="d-block mt-3"> <span class="mdi mdi-arrow-left-thick">Back to All MyPosts</span></a>
          <form method="post" action="/admin/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3 mt-4">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}">
              @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 mt-4">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error ('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 mt-4">
              <label for="category" class="form-label">Category</label>
              <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                @if (old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Images</label>
              @if ($post->image)
              <img src="{{ asset('admin/post/image/'. $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
              @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
              @endif
              <input class="form-control @error ('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
              @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            <div class="mb-3 mt-4">
              <label for="body" class="form-label">Body</label>
              @error('body')
              <p class="text-danger">{{ $message }}</p>
              @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            <button type="submit" class="btn btn-info mt-3">Update Post</button>
          </form>
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
  
  {{-- preview image --}}
  <script>
    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }

  }
  </script>
</body>

</html>