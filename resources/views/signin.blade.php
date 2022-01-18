<x-layout>
    <x-slot name="title">Sign in</x-slot>
    
    <form method="POST">

        <x-form.input label="Login" name="login" value="admin" />

        <x-form.input type="password" label="Password" name="password" value="12345678" />

        <x-form.input type="checkbox" label="Remember me" name="remember" />

        <a href="{{ route('admin.welcome') }}" type="submit" class="btn btn-primary">Sign in</a>

    </form>
</x-layout>
