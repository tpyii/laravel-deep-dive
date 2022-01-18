<x-layout>
  <x-slot name="title">Create an Order</x-slot>

  <x-errors />

  <form method="POST" action="{{ route('order.store') }}">
    @csrf

    <x-form.input label="Name" name="name" />

    <x-form.input type="number" label="Phone" name="phone" />

    <x-form.input type="email" label="E-mail" name="email" />

    <x-form.input type="textarea" label="Message" name="message" />

    <button type="submit" class="btn btn-primary">Send</button>

</form>
  
</x-layout>
