<tr>
    <td>{{ $category->name }}</td>
    <td>{{ $category->slug }}</td>
    <td>{{ $category->sort }}</td>
    <td>{{ $category->status == 1 ? '啓用' : '停用' }}</td>
    <td>
        <a href="{{ route('backend.category.edit', $category->id) }}" class="btn btn-primary">編輯</a>
        <form action="{{ route('backend.category.destroy', $category->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">刪除</button>
        </form>
    </td>
</tr>
@if (isset($category->children))
    @foreach ($category->children as $child)
        @include('backend.category.category-row', ['category' => $child])
    @endforeach
@endif
