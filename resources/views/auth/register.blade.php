<x-layout>
    <x-slot name="title">Register</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <x-form.input label="Name" name="name" required />

        <x-form.input type="email" label="Email" name="email" required />

        <x-form.input type="password" label="Password" name="password" required />

        <x-form.input type="password" label="Confirm Password" name="password_confirmation" required />

        <button type="submit" class="btn btn-primary">Register</button>

    </form>
</x-layout>
