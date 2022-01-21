<x-admin.layout>
  <x-slot name="title">News</x-slot>

  <x-slot name="toolbar">
    <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Create</a>
  </x-slot>

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
            <td>{{ $item->category_title }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</x-admin.layout>
