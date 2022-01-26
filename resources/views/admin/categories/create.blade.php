<x-admin.layout>
  <x-slot name="title">Create a Category</x-slot>

  <x-errors />

  <form method="POST" action="{{ route('admin.categories.store') }}">
    @csrf

    <x-form.input label="Title" name="title" />

    <button type="submit" class="btn btn-primary">Save</button>

</form>
  
</x-admin.layout>
