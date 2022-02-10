<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">

      @if (Route::has('admin.welcome'))
        <li class="nav-item">
          <a class="nav-link @if (request()->routeIs('admin.welcome')) active @endif" href="{{ route('admin.welcome') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
      @endif

      @if (Route::has('admin.users.index'))
        <li class="nav-item">
          <a class="nav-link @if (request()->routeIs('admin.users.*')) active @endif" href="{{ route('admin.users.index') }}">
            <span data-feather="file-text"></span>
            Users
          </a>
        </li>
      @endif

      @if (Route::has('admin.news.index'))
        <li class="nav-item">
          <a class="nav-link @if (request()->routeIs('admin.news.*')) active @endif" href="{{ route('admin.news.index') }}">
            <span data-feather="file-text"></span>
            News
          </a>
        </li>
      @endif
      
      @if (Route::has('admin.categories.index'))
        <li class="nav-item">
          <a class="nav-link @if (request()->routeIs('admin.categories.*')) active @endif" href="{{ route('admin.categories.index') }}">
            <span data-feather="layers"></span>
            Categories
          </a>
        </li>
      @endif

      @if (Route::has('admin.sources.index'))
        <li class="nav-item">
          <a class="nav-link @if (request()->routeIs('admin.sources.*')) active @endif" href="{{ route('admin.sources.index') }}">
            <span data-feather="layers"></span>
            Sources
          </a>
        </li>
      @endif

    </ul>
  </div>
</nav>
