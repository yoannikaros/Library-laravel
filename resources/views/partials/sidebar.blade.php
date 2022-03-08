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
          class="fas fa-columns"></i> <span>Dashboard</span></a></li>
    <li class="{{ request()->routeIs('books.index') ? 'active' : '' }}"><a href="{{ route('books.index') }}"><i
          class="fas fa-book"></i> <span>Books</span></a></li>
    <li class="{{ request()->routeIs('staffs.index') ? 'active' : '' }}"><a href="{{ route('staffs.index') }}"><i
          class="fas fa-people-carry"></i> <span>Staff Management</span></a></li>

    <li class="menu-header">Member</li>
    <li class="{{ request()->routeIs('reservations.index') ? 'active' : '' }}">
      <a href="{{ route('reservations.index') }}"><i class="fas fa-book-open"></i> <span>Reservations</span></a>
    </li>
    <li class="{{ request()->routeIs('reversions.index') ? 'active' : '' }}"><a
        href="{{ route('reversions.index') }}"><i class="fas fa-school"></i>
        <span>Reversion</span></a></li>
  </ul>
</aside>
