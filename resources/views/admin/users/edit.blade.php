<x-admin.layout>
    <x-slot name="title">Profile</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('admin.users.update', $item) }}">
        @csrf
        @method('PUT')

        <x-form.input label="Name" name="name" :value="$item->name" />

        <x-form.input type="email" label="Email" name="email" :value="$item->email" />

        <x-form.input type="checkbox" label="Admin" name="is_admin" :value="$item->is_admin" />

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</x-admin.layout>
