<x-admin.layout>
    <x-slot name="title">Edit the News Article</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('admin.news.update', $item) }}">
        @csrf
        @method('PUT')

        <x-form.input label="Title" name="title" :value="$item->title" />

        <x-form.input type="textarea" label="Description" name="description" :value="$item->description" />

        <x-form.input type="textarea" label="Body" name="body" :value="$item->body"/>

        <x-form.input type="select" label="Category" name="category_id" :options="$categories" :value="$item->category_id" />

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</x-admin.layout>
