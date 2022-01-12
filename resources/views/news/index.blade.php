<x-layout>
  <x-slot name="title">News</x-slot>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    @foreach ($news as $item)
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

          <div class="card-body">
            <p><strong>{{ $item['title'] }}</strong></p>
            <p class="card-text">{{ $item['description'] }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="{{ route('news.show', $item['id']) }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
              </div>
              <small class="text-muted">{{ now() }}</small>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    
  </div>
</x-layout>
