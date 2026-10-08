<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Dashboard') - Spica Admin</title>

  <link rel="stylesheet" href="{{ asset('spica/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('spica/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('spica/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('spica/images/favicon.png') }}">
  @stack('styles')
</head>
<body>
  <div class="container-scroller d-flex">
    @include('partials.sidebar')

    <div class="container-fluid page-body-wrapper">
      @include('partials.navbar')

      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('partials.footer')
      </div>
    </div>
  </div>

  <script src="{{ asset('spica/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('spica/js/off-canvas.js') }}"></script>
  <script src="{{ asset('spica/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('spica/js/template.js') }}"></script>
  @stack('scripts')
</body>
</html>
