<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>GOMBAL| @yield('title')</title>
   </head>
<body>
    
  <div class="sidebar close bg-dark">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <ul class="nav-links bg-dark">
      <li><a href="#"><i class='bx bx-home bx-lg'></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank bg-dark">
          <li><a class="link_name" href="/home">Home</a></li>
        </ul>
      </li>
      <!-- <li>
        <div class="icon-link">
          <a href="#">
          <i class='bx bx-collection'></i>
            <span class="link_name">Barang</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu  bg-dark">
          <li><a class="link_name" href="/barang">Barang</a></li>
        </ul>
      </li> -->
      <li>
        <a href="#">
        <i class='bx bx-transfer'></i>
          <span class="link_name bg-dark">Transaksi</span>
        </a>
        <ul class="sub-menu blank bg-dark">
          <li><a class="link_name" href="">Transaksi</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
        <i class='bx bxs-user-detail'></i>
          <span class="link_name">Customer</span>
        </a>
        <ul class="sub-menu blank bg-dark">
          <li><a class="link_name" href="/customer">Customer</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-map'></i>
          <span class="link_name">Lokasi</span>
        </a>
        <ul class="sub-menu blank bg-dark">
          <li><a class="link_name" href="/lokasi">Lokasi</a></li>
        </ul>
      </li>
  </li>
</ul>
  </div>
</body>
</html>
