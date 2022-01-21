<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('admin.welcome')) active @endif" href="{{ route('admin.welcome') }}">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('admin.news.*')) active @endif" href="{{ route('admin.news.index') }}">
          <span data-feather="file-text"></span>
          News
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('admin.categories.*')) active @endif" href="{{ route('admin.categories.index') }}">
          <span data-feather="layers"></span>
          Categories
        </a>
      </li>
    </ul>
  </div>
</nav>
