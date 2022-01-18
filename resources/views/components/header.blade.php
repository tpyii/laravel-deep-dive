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
            <li><a href="{{ route('news.index') }}" class="text-white">News</a></li>
            <li><a href="{{ route('categories.index') }}" class="text-white">Categories</a></li>
            <li><a href="{{ route('order.create') }}" class="text-white">Create an Order</a></li>
            <li><a href="{{ route('feedback.create') }}" class="text-white">Feedback</a></li>
            <li><a href="{{ route('signin') }}" class="text-white">Sign in</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
        <strong>News Aggregator</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
