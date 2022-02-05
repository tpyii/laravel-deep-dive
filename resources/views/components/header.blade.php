<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Hey! It will be a news aggregator. Come back later!</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Menu</h4>
          <ul class="list-unstyled">

            @if (Route::has('news.index'))
              <li><a href="{{ route('news.index') }}" class="text-white">News</a></li>
            @endif

            @if (Route::has('categories.index'))
              <li><a href="{{ route('categories.index') }}" class="text-white">Categories</a></li>
            @endif

            @if (Route::has('order.create'))
              <li><a href="{{ route('order.create') }}" class="text-white">Create an Order</a></li>
            @endif
            
            @if (Route::has('feedback.create'))
              <li><a href="{{ route('feedback.create') }}" class="text-white">Feedback</a></li>
            @endif

            @guest
              @if (Route::has('login'))
                <li><a href="{{ route('login') }}" class="text-white">Login</a></li>
              @endif

              @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="text-white">Register</a></li>
              @endif
            @else

              @if (Route::has('profile.edit'))
                <li><a href="{{ route('profile.edit') }}" class="text-white">Profile</a></li>
              @endif

              <li><a href="{{ route('logout') }}" class="text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

              <form id="logout-form" class="d-none" method="POST" action="{{ route('logout') }}">
                @csrf
              </form>

            @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
        <strong>News Aggregator</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
