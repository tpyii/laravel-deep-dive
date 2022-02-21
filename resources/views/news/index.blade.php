<x-layout>
  <x-slot name="title">News</x-slot>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    @foreach ($news as $item)
      <div class="col">
        <div class="card shadow-sm">

          @if (Storage::disk('public')->exists($item->image))
            <img src="{{ asset('storage/' . $item->image) }}" alt="">
          @elseif ($item->image)
            <img src="{{ $item->image }}" alt="">
          @endif

          <div class="card-body">
            <p><strong>{{ $item->title }}</strong></p>
            <p class="card-text">{{ $item->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="{{ route('news.show', $item->slug) }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
              </div>
              <small class="text-muted">{{ $item->created_at }}</small>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    
  </div>

  {{ $news->links() }}
</x-layout>
