<x-admin.layout>
  <x-slot name="title">Sources</x-slot>

  <x-slot name="toolbar">
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="{{ route('admin.sources.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Create</a>
    
      @if (Route::has('admin.parser'))
        <a href="{{ route('admin.parser') }}" type="button" class="btn btn-sm btn-outline-primary">Parse</a>
      @endif
    </div>
  </x-slot>

  <x-success />

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Url</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated at</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>

        @foreach($sources as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->url }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>
              <div class="btn-group">
                <a type="button" class="btn btn-sm btn-outline-success" href="{{ route('admin.sources.edit', $item)}}">Edit</a>
                <form method="POST" action="{{ route('admin.sources.destroy', $item) }}" class="btn-group mx-0">
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

  {{ $sources->links() }}
</x-admin.layout>
