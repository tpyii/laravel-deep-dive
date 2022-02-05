<x-layout>
    <x-slot name="title">Verify Your Email Address</x-slot>

    <x-errors />

    @if (session('resent'))
        <x-alert type="success">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </x-alert>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf

        <button type="submit" class="btn btn-primary">Click here to request another</button>

    </form>
</x-layout>
