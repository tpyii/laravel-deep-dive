<x-layout>
  <x-slot name="title">Feedback</x-slot>

  <x-errors />

  <form method="POST" action="{{ route('feedback.store') }}">
    @csrf

    <x-form.input label="Name" name="name" />

    <x-form.input type="textarea" label="Message" name="message" />

    <button type="submit" class="btn btn-primary">Send</button>

</form>
  
</x-layout>
