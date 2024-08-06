@extends('backend.layouts.app')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                選單列表
                            </h1>
                        </div>
                        {{-- <div class="col-12 col-xl-auto mb-3">Optional page header content</div> --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="card">

                <div class="card-header">選單列表維護</div>
                <div class="card-body">
                    <!-- // TODO: 這裏要增加兩個按鈕，一個是新增選單，一個是刪除 -->
                    <a href="{{ route('backend.category.create') }}" class="btn btn-add">
                        <i class="fa-regular fa-square-plus"></i>&nbsp;新增選單</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="cell-border">
                            <thead>
                                <tr>
                                    <th>選單名稱</th>
                                    <th>選單連結</th>
                                    <th>選單排序</th>
                                    <th>啓用狀態</th>
                                    <th style="width: 20%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->sort }}</td>
                                        <td>{{ $category->status == 1 ? '啓用' : '停用' }}</td>
                                        <td>
                                            <a href="{{ route('backend.category.edit', $category->id) }}"
                                                class="btn btn-edit">編輯</a>
                                            <form action="{{ route('backend.category.destroy', $category->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-remove">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        {{ $categories->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        new DataTable('#dataTable', {
            language: {
                url: '//cdn.datatables.net/plug-ins/2.1.2/i18n/zh-HANT.json',
            },
            ordering: false
        });
    </script>
@endsection

@section('css')
@endsection
