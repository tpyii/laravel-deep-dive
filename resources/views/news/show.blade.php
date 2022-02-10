<x-layout>
    <x-slot name="title">{{ $item->title }}</x-slot>

    <div class="mb-3">
        @if (Storage::disk('public')->exists($item->image))
            <img src="{{ asset('storage/' . $item->image) }}" alt="">
        @elseif ($item->image)
            <img src="{{ $item->image }}" alt="">
        @endif
    </div>
    
    {!! $item->body !!}
    
    <div class="mt-3">
        Category: 
        <a href="{{ route('category.news.index', $item->category) }}" type="button" class="btn btn-sm btn-outline-secondary">
            {{ $item->category->title }}
        </a>
    </div>
</x-layout>
