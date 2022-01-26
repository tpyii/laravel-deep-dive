<x-admin.layout>
    <x-slot name="title">Edit the Category</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('admin.categories.update', $item) }}">
        @csrf
        @method('PUT')

        <x-form.input label="Title" name="title" :value="$item->title" />

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</x-admin.layout>
