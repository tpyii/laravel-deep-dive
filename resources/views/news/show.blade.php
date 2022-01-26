<x-layout>
    <x-slot name="title">{{ $item->title }}</x-slot>
    
    {!! $item->body !!}
    
    <div class="mt-3">
        Category: 
        <a href="{{ route('category.news.index', $item->category_slug) }}" type="button" class="btn btn-sm btn-outline-secondary">
            {{ $item->category_title }}
        </a>
    </div>
</x-layout>
