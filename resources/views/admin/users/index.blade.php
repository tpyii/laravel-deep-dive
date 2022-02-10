<x-admin.layout>
  <x-slot name="title">Users</x-slot>

  <x-slot name="toolbar">
    <a href="{{ route('admin.users.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Create</a>
  </x-slot>

  <x-success />

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Admin</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated at</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>

        @foreach($users as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->is_admin ? 'true' : 'false' }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>
              <div class="btn-group">
                <a type="button" class="btn btn-sm btn-outline-success" href="{{ route('admin.users.edit', $item)}}">Edit</a>
                <form method="POST" action="{{ route('admin.users.destroy', $item) }}" class="btn-group mx-0">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>

  {{ $users->links() }}
</x-admin.layout>
