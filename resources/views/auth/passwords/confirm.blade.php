<x-layout>
    <x-slot name="title">Confirm Password</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <x-form.input type="password" label="Password" name="password" required />

        <button type="submit" class="btn btn-primary">Confirm Password</button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

    </form>
</x-layout>
