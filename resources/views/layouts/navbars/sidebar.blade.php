<div class="sidebar" data-color="orange" data-background-color="white">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="" class="simple-text logo-normal">
      {{ auth()->user()->name }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dss' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dss') }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/dss.svg"></i>
            <p>{{ __('SPK Pohon Gaharu') }}</p>
        </a>
      </li>
      @if (auth()->user()->name == 'Admin')
      <li class="nav-item {{ ($activePage == 'pengguna' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#land" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/land.svg"></i>
          <p>{{ __('Data Alternatif') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="land">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link"href="#">
                <span class="sidebar-mini"> TL </span>
                <span class="sidebar-normal">{{ __('Tampil Lahan') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="#">
                <span class="sidebar-mini"> TL </span>
                <span class="sidebar-normal">{{ __('Tambah Lahan') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> KL </span>
                <span class="sidebar-normal"> {{ __('Kelola Lahan') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'pengguna' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#crit" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/criteria.svg"></i>
          <p>{{ __('Data Kriteria') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="crit">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link"href="#">
                <span class="sidebar-mini"> TK </span>
                <span class="sidebar-normal">{{ __('Tampil Kriteria') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="#">
                <span class="sidebar-mini"> TS </span>
                <span class="sidebar-normal">{{ __('Tampil Sub Kriteria') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="#">
                <span class="sidebar-mini"> TS </span>
                <span class="sidebar-normal">{{ __('Tambah Sub Kriteria') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> KS </span>
                <span class="sidebar-normal"> {{ __('Kelola Sub Kriteria') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'pengguna' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#prof" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/profile.svg"></i>
          <p>{{ __('Data Pengguna') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="prof">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'pengguna' ? ' active' : '' }}">
              <a class="nav-link"href="{{ route('profile.share') }}">
                <span class="sidebar-mini"> TP </span>
                <span class="sidebar-normal">{{ __('Tampil Profil') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'maintenance' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> KP </span>
                <span class="sidebar-normal"> {{ __('Kelola Profil') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endif
      @if (auth()->user()->name != 'Admin')
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/profile.svg"></i>
            <p>{{ __('Profil Pengguna') }}</p>
        </a>
      </li>
      @endif
      {{-- <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>
