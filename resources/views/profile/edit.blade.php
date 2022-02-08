<x-layout>
    <x-slot name="title">Profile</x-slot>

    <x-success />

    <x-errors />

    @if ($item->avatar)
        <img src="{{ $item->avatar }}" class="img-thumbnail mb-3" alt="">
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <x-form.input label="Name" name="name" :value="$item->name" />

        <x-form.input type="email" label="Email" name="email" :value="$item->email" />

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</x-layout>
