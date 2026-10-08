<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item sidebar-category">
      <p>Navigasi</p>
      <span></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="mdi mdi-view-quilt menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item sidebar-category">
      <p>Halaman</p>
      <span></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#halaman-1" aria-expanded="false" aria-controls="halaman-1">
        <i class="mdi mdi-file-document menu-icon"></i>
        <span class="menu-title">Halaman 1 - 5</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="halaman-1">
        <ul class="nav flex-column sub-menu">
          @foreach ([1, 2, 3, 4, 5] as $n)
            <li class="nav-item"><a class="nav-link" href="{{ url('/halaman'.$n) }}">Halaman {{ $n }}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#halaman-10" aria-expanded="false" aria-controls="halaman-10">
        <i class="mdi mdi-file-multiple menu-icon"></i>
        <span class="menu-title">Halaman 10 - 12</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="halaman-10">
        <ul class="nav flex-column sub-menu">
          @foreach ([10, 11, 12] as $n)
            <li class="nav-item"><a class="nav-link" href="{{ url('/halaman'.$n) }}">Halaman {{ $n }}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#halaman-20" aria-expanded="false" aria-controls="halaman-20">
        <i class="mdi mdi-layers menu-icon"></i>
        <span class="menu-title">Halaman 20 - 25</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="halaman-20">
        <ul class="nav flex-column sub-menu">
          @foreach ([20, 21, 22, 23, 24, 25] as $n)
            <li class="nav-item"><a class="nav-link" href="{{ url('/halaman'.$n) }}">Halaman {{ $n }}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/coba') }}">
        <i class="mdi mdi-flask menu-icon"></i>
        <span class="menu-title">Coba</span>
      </a>
    </li>
  </ul>
</nav>
