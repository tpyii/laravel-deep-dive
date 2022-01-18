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
          <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>

        @foreach($news as $item)
          <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['title'] }}</td>
            <td>{{ $item['description'] }}</td>
            <td>{{ $item['category']['title'] }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</x-admin.layout>
