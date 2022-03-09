<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">

    <li class="menu-header">Staff</li>
    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i
          class="fas fa-columns"></i> <span>Dasbor</span></a></li>
    <li class="{{ request()->routeIs('books.*') ? 'active' : '' }}"><a href="{{ route('books.index') }}"><i
          class="fas fa-book"></i> <span>Buku</span></a></li>
    <li class="{{ request()->routeIs('staffs.*') ? 'active' : '' }}"><a href="{{ route('staffs.index') }}"><i
          class="fas fa-people-carry"></i> <span>Manajemen Staf</span></a></li>

    <li class="menu-header">Member</li>
    <li class="{{ request()->routeIs('reservations.*') ? 'active' : '' }}">
      <a href="{{ route('reservations.*') }}"><i class="fas fa-book-open"></i> <span>Peminjaman</span></a>
    </li>
    <li class="{{ request()->routeIs('reversions.*') ? 'active' : '' }}"><a
        href="{{ route('reversions.index') }}"><i class="fas fa-school"></i>
        <span>Pengembalian</span></a></li>
  </ul>
</aside>
