<x-admin.layout>
    <x-slot name="title">Create a Source</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('admin.sources.store') }}">
        @csrf

        <x-form.input label="Title" name="title" />

        <x-form.input label="Url" name="url" />

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</x-admin.layout>
