<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      @if(session()->get("level") == "admin")
      <li class="nav-item">
        <a href="{{session()->get("url")}}" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>Beranda</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route("admin.rombel")}}" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Data Rombel</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route("admin.kelas")}}" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Data Kelas</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route("admin.siswa")}}" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Data Siswa</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route("admin.guru")}}" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Data Guru</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route("admin.matpel")}}" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Mata Pelajaran</p>
        </a>
      </li>
      <li class="nav-item">
          <a href="{{route("profile")}}" class="nav-link">
              <i class="nav-icon fa fa-user-alt"></i>
              <p>Profil Saya</p>
          </a>
      </li>
      <li class="nav-item">
        <a href="{{route("logout")}}" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a>
      </li>
      @elseif(session()->get("level") == "guru")
      <li class="nav-item">
        <a href="{{session()->get("url")}}" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>Beranda</p>
        </a>
      </li>
      <li class="nav-item">
          <a href="{{route("wali.kelas.list")}}" class="nav-link">
              <i class="nav-icon fas fa-dice-five"></i>
              <p> Pengisian Raport</p>
          </a>
      </li>
      @if(\App\Models\Revisi\Kela::where(["guru_id"=>session()->get("id")])->count() > 0)
      <li class="nav-item">
          <a href="{{route("wali.kelas.list")}}" class="nav-link">
              <i class="nav-icon fas fa-dice-five"></i>
              <p>Raport Siswa</p>
          </a>
      </li>
      <li class="nav-item">
          <a href="{{route("wali.kelas.list")}}" class="nav-link">
              <i class="nav-icon fas fa-dice-five"></i>
              <p>Wali Kelas</p>
          </a>
      </li>
      <li class="nav-item">
          <a href="{{route("wali.kenaikan.list")}}" class="nav-link">
              <i class="nav-icon fas fa-dice-four"></i>
              <p>Kenaikan Kelas</p>
          </a>
      </li>
      @endif
      <li class="nav-item">
          <a href="{{route("virtual.class.list")}}" class="nav-link">
              <i class="nav-icon fas fa-dice-six"></i>
              <p>Kelas Virtual</p>
          </a>
      </li>
      <li class="nav-item">
        <a href="{{route("guru.banksoal")}}" class="nav-link">
          <i class="nav-icon fas fa-list"></i>
          <p>Bank Soal</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route("guru.ujian")}}" class="nav-link">
          <i class="nav-icon fas fa-question"></i>
          <p>Ujian</p>
        </a>
      </li>

      <li class="nav-item">
          <a href="{{route("profile")}}" class="nav-link">
              <i class="nav-icon fa fa-user-alt"></i>
              <p>Profil Saya</p>
          </a>
      </li>
      <li class="nav-item">
        <a href="{{route("logout")}}" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a>
      </li>
      @else
        <li class="nav-item">
          <a href="{{route("login")}}" class="nav-link">
            <i class="nav-icon fas fa-sign-in-alt"></i>
            <p>Login</p>
          </a>
        </li>
      @endif
  </ul>
</nav>
