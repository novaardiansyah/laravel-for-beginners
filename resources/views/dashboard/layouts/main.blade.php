<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet" />

  {{-- Trix Editor --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/basecamp/trix@1.3.1/dist/trix.css">
  <script src="https://cdn.jsdelivr.net/gh/basecamp/trix@1.3.1/dist/trix.js"></script>

  <style>
    /* Trix Editor */
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }

  </style>

  <title>Nova Blog | {{ $title }}</title>
</head>

<body>
  @include('dashboard.layouts.header')
  <div class="container-fluid">
    <div class="row">
      @include('dashboard.layouts.sidebar')

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
      </main>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

  {{-- Feather Icons --}}
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

  <script src="/js/dashboard.js"></script>

  <script>
    // ! Trix Editor
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });

    // Preview Image 
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      // take image data
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
        imgPreview.alt = oFREvent.target.result;
      }
    }

    // ! Generate Slug
    const slugKeyword = document.querySelector('.slug-keyword');
    const generateSlug = document.querySelector('.generate-slug');

    if (slugKeyword !== null && generateSlug !== null) {
      slugKeyword.addEventListener('keyup', function() {
        fetch('/dashboard/createSlug?slugKeyword=' + slugKeyword.value)
          .then(response => response.json())
          .then(data => {
            generateSlug.value = data.slug;
          });
      });
    }
  </script>
</body>

</html>
