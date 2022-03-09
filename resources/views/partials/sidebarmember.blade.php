<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">

    <li class="menu-header">Member</li>
    <li class="{{ request()->routeIs('members.*') ? 'active' : '' }}"><a
      href="/beranda"><i class="fas fa-user-friends"></i>
      <span>Beranda</span></a></li>

    <li class="{{ request()->routeIs('reservations.*') ? 'active' : '' }}">
      <a href="/peminjaman"><i class="fas fa-book-open"></i> <span>Peminjaman</span></a>
    </li>


    <li class="{{ request()->routeIs('reservations.*') ? 'active' : '' }}">
      <a href="/riwayat"><i class="fas fa-book-open"></i> <span>Riwayat</span></a>
    </li>


  </ul>
</aside>
