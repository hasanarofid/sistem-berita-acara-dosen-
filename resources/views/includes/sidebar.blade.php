<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Sistem Berita Acara Dosen
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
  

           <li class="nav-item ">
            <a class="nav-link" href="{{ route('berita-acara.index') }}">
              <i class="material-icons">library_books</i>
              <p>Berita Acara</p>
            </a>
          </li>

          {{-- <li class="nav-item ">
            <a class="nav-link" href="{{ route('berita-acara-formal-non.index') }}">
              <i class="material-icons">library_books</i>
              <p>BA Formal dan Non Formal</p>
            </a>
          </li> --}}

          <li class="nav-item ">
            <a class="nav-link" href="{{ route('berita-acara-uts-uas.index') }}">
              <i class="material-icons">library_books</i>
              <p>UTS / UAS</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="{{ route('berita-acara-kp-skripsi.index') }}">
              <i class="material-icons">library_books</i>
              <p>KP / Skripsi</p>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Master Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
              <a class="dropdown-item" href="{{ route('dosen.index') }}">Dosen</a>
              {{-- <a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Mahasiswa</a> --}}
              <a class="dropdown-item" href="{{ route('fakultas.index') }}">Jurusan</a>
              {{-- 
              <a class="dropdown-item" href="{{ route('gedung.index') }}">Gedung</a> --}}
              <a class="dropdown-item" href="{{ route('kelas.index') }}">Kelas</a>
              <a class="dropdown-item" href="{{ route('matkul.index') }}">Matakuliah</a>
              {{-- <a class="dropdown-item" href="{{ route('prodi.index') }}">Program Studi</a> --}}
              <a class="dropdown-item" href="{{ route('ruangan.index') }}">Ruangan</a>
              <a class="dropdown-item" href="{{ route('ta.index') }}">Tahun Akademik</a>
            </div>
          </li>

        </ul>
      </div>
    </div>