{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('home') }}">
          <i class="fa fa-home"></i> Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('category') }}">
          <i class="	fa fa-server"></i> Lihat Category
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('product') }}">
          <i class="fa fa-shopping-cart"></i> Lihat Products
        </a>
      </li>
    </ul>
  </div>
</nav> --}}
<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
          <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="/dashbord">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                  Dashboard
              </a>

              <hr class="sidebar-divider">
                  
                  <a class="nav-link" href="/category">
                      <div class="sb-nav-link-icon"><i class="fa fa-server"></i></div>
                      Category
                  </a>
                  <a class="nav-link" href="/product">
                      <div class="sb-nav-link-icon"><i class="fa fa-shopping-cart"></i></div>
                      Product
                  </a>
                  
                  
                  {{-- <hr class="sidebar-divider">
                  <a class="nav-link" href="/user/{user}/edit">
                      <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                      Edit Profile
                  </a> --}}

              
              
              {{-- <a class="nav-link" href="{{ url("semua_course") }}">
                  <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></i></div>
                  Browse Course
              </a> --}}
              
          </div>
      </div>
  </nav>
</div>