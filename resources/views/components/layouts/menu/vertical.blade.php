<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ url('/') }}" class="app-brand-link"><x-app-logo /></a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('dashboard') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-home"></i>{{ __('Dashboard') }}</a>
    </li>
    <li class="menu-item {{ request()->is('permintaan*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('permintaan') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-book"></i>{{ __('Permintaan') }}</a>
    </li>
    <li class="menu-item {{ request()->is('nomor-surat*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('nomor-surat') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-book-open"></i>{{ __('Nomor Surat') }}</a>
    </li>
    <li class="menu-item {{ request()->is('pegawai*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('pegawai') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-user"></i>{{ __('Pegawai') }}</a>
    </li>
    <li class="menu-item {{ request()->is('kegiatan*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('kegiatan') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-calendar"></i>{{ __('Kegiatan') }}</a>
    </li>

    <li class="menu-item {{ request()->is('data-informasi*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('data-informasi') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-file"></i>{{ __('Data & Informasi') }}</a>
    </li>

    <li class="menu-item {{ request()->is('laporan-kinerja*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('laporan-kinerja') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-check-double"></i>{{ __('Laporan Kinerja') }}</a>
    </li>

    <li class="menu-item {{ request()->is('tugas*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('tugas') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-list-ul"></i>{{ __('Tugas Kegiatan') }}</a>
    </li>
    
    @if(auth()->user()->hasRole('admin'))
    <li class="menu-item {{ request()->is('user*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('user') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-lock"></i>{{ __('User') }}</a>
    </li>
    @endif
    <!-- Settings -->
    <li class="menu-item {{ request()->is('settings/*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cog"></i>
        <div class="text-truncate">{{ __('Settings') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('settings.profile') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.profile') }}" wire:navigate>{{ __('Profile') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('settings.password') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.password') }}" wire:navigate>{{ __('Password') }}</a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
<!-- / Menu -->

<script>
  // Toggle the 'open' class when the menu-toggle is clicked
  document.querySelectorAll('.menu-toggle').forEach(function(menuToggle) {
    menuToggle.addEventListener('click', function() {
      const menuItem = menuToggle.closest('.menu-item');
      // Toggle the 'open' class on the clicked menu-item
      menuItem.classList.toggle('open');
    });
  });
</script>
