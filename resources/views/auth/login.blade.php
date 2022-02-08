<x-layout>
    <x-slot name="title">Login</x-slot>

    <x-errors />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <x-form.input type="email" label="Email" name="email" required />

        <x-form.input type="password" label="Password" name="password" required />

        <x-form.input type="checkbox" label="Remember me" name="remember" />

        <button type="submit" class="btn btn-primary">Login</button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

        @if (Route::has('auth.redirect'))
            <a class="btn btn-link" href="{{ route('auth.redirect', ['network' => 'vkontakte']) }}">
                Login with Vkontakte
            </a>
        @endif

        @if (Route::has('auth.redirect'))
            <a class="btn btn-link" href="{{ route('auth.redirect', ['network' => 'facebook']) }}">
                Login with Facebook
            </a>
        @endif

    </form>
</x-layout>
