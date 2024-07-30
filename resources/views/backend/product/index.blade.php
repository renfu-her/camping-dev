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
                                產品列表
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

                <div class="card-header">產品列表維護</div>
                <div class="card-body">
                    <!-- // TODO: 這裏要增加兩個按鈕，一個是新增選單，一個是刪除 -->
                    <a href="{{ route('backend.product.create') }}" class="btn btn-primary">
                        <i class="fa-regular fa-square-plus"></i>&nbsp;新增產品</a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>&nbsp;刪除</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable">
                            <thead>
                                <tr>
                                    <th>產品名稱</th>
                                    <th>選單名稱</th>
                                    <th>圖片</th>
                                    <th>啓用狀態</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                                style="width: 100px;">
                                        </td>
                                        <td>{{ $product->status ? '啓用' : '停用' }}</td>
                                        <td>
                                            <a href="{{ route('backend.product.edit', $product->id) }}"
                                                class="btn btn-primary">編輯</a>
                                            <form action="{{ route('backend.product.destroy', $product->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">刪除</button>
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
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('dataTable');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
    </script>
@endsection

@section('css')
@endsection
