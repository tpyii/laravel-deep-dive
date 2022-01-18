<x-admin.layout>
    <x-slot name="title">Create a News Article</x-slot>

    <form method="POST">

        <x-form.input label="Title" name="title" />

        <x-form.input type="textarea" label="Description" name="description" />

        <x-form.input type="textarea" label="Body" name="body" />

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</x-admin.layout>
