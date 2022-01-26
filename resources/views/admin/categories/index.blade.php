<x-admin.layout>
  <x-slot name="title">Categories</x-slot>

  <x-slot name="toolbar">
    <a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Create</a>
  </x-slot>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated at</th>
        </tr>
      </thead>
      <tbody>

        @foreach($categories as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</x-admin.layout>
