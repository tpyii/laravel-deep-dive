<x-layout>
    <x-slot name="title">{{ $item->title }}</x-slot>
    
    {!! $item->body !!}
    
    <div class="mt-3">
        Category: 
        <a href="{{ route('category.news.index', $item->category) }}" type="button" class="btn btn-sm btn-outline-secondary">
            {{ $item->category->title }}
        </a>
    </div>
</x-layout>
