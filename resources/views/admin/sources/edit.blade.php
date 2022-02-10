<x-admin.layout>
    <x-slot name="title">Edit the Source</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('admin.sources.update', $item) }}">
        @csrf
        @method('PUT')

        <x-form.input label="Title" name="title" :value="$item->title" />

        <x-form.input label="Url" name="url" :value="$item->url" />

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</x-admin.layout>
