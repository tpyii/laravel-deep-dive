<x-admin.layout>
  <x-slot name="title">News</x-slot>

  <x-slot name="toolbar">
    <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Create</a>
  </x-slot>

  <x-success />

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Author</th>
          <th scope="col">Status</th>
          <th scope="col">Category</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated at</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>

        @foreach($news as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->author }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->category->title }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>
              <div class="btn-group">
                <a type="button" class="btn btn-sm btn-outline-success" href="{{ route('admin.news.edit', $item)}}">Edit</a>
                <form method="POST" action="{{ route('admin.news.destroy', $item) }}" class="btn-group mx-0">
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

  {{ $news->links() }}
</x-admin.layout>
