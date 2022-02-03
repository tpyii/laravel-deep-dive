<x-admin.layout>
    <x-slot name="title">Create a News Article</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('admin.news.store') }}">
        @csrf

        <x-form.input label="Title" name="title" />

        <x-form.input type="textarea" label="Description" name="description" />

        <x-form.input type="textarea" label="Body" name="body" />

        <x-form.input type="select" label="Category" name="category_id" :options="$categories" />

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</x-admin.layout>
