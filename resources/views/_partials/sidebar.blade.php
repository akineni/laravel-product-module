<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('dashboard.view') }}" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2">Prodly</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="{{ route('dashboard.view') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Layouts -->
    
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>
    
    @php
        $currentRoute = Route::currentRouteName();
    @endphp

    <li class="menu-item {{ in_array($currentRoute, ['dashboard.products.index', 'dashboard.products.create']) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">Manage Products</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ $currentRoute === 'dashboard.products.index' ? 'active' : '' }}">
                <a href="{{ route('dashboard.products.index') }}" class="menu-link">
                    <div data-i18n="Account">Products</div>
                </a>
            </li>
            <li class="menu-item {{ $currentRoute === 'dashboard.products.create' ? 'active' : '' }}">
                <a href="{{ route('dashboard.products.create') }}" class="menu-link">
                    <div data-i18n="Account">Create Product</div>
                </a>
            </li>
        </ul>
    </li>
  </ul>
</aside>