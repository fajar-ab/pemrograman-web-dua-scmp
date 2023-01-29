  <!-- judul -->
  <div class="bg-dark p-4 ">
    <span class="border border-2 border-light py-1 px-2 me-3 display-6 rounded float-start">
      <i class="fa-solid fa-list-check text-white"></i>
    </span>
    <h5 class="text-white h4">UTS Project</h5>
    <span class="text-muted">Aplikasi Data Mahasiswa</span>
  </div>
  <!-- judul -->
  <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark opacity-95">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link px-3 active" aria-current="page" href="/">
              <i class="fa-solid fa-calendar-check me-2"></i>Home</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link disabled">|</a>
          </li>
          <li class="nav-item dropdown">
            <!-- dropdown -->
            <a class="nav-link dropdown-toggle" href="#" id="mahasiswaMenu" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-book-open me-2"></i>
              <span>Mahasiswa</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="mahasiswaMenu">
              <li>
                <a class="dropdown-item" href="<?= base_url("mahasiswa/index") ?>">Table Data</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url("mahasiswa/tambah") ?>">Tambah Data</a>
              </li>
            </ul>
            <!-- dropdown -->
            <!-- <a class="nav-link px-3" href="mahasiswa">
              </a> -->
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>