<x-layout>
    <x-slot name="title">Reset Password</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <x-form.input type="email" label="Email" name="email" :value="{{ $email ?? old('email') }}" required />

        <x-form.input type="password" label="Password" name="password" required />

        <x-form.input type="password" label="Confirm Password" name="password_confirmation" required />

        <button type="submit" class="btn btn-primary">Reset Password</button>

    </form>
</x-layout>
