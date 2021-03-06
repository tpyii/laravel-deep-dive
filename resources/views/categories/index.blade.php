<x-layout>
  <x-slot name="title">Categories</x-slot>

  <div class="list-group">

    @foreach ($categories as $item)
      <a href="{{ route('category.news.index', $item->slug ) }}" class="list-group-item list-group-item-action">
        {{ $item->title }}
      </a>
    @endforeach

  </div>

  {{ $categories->links() }}
</x-layout>
