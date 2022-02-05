<x-layout>
    <x-slot name="title">Reset Password</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <x-form.input type="email" label="Email" name="email" :value="{{ old('email') }}" required />

        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>

    </form>
</x-layout>
