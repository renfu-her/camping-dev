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

                <div class="card-header">內容管理維護</div>
                <div class="card-body">
                    <!-- // TODO: 這裏要增加兩個按鈕，一個是新增選單，一個是刪除 -->
                    <a href="{{ route('backend.product.create') }}" class="btn btn-add">
                        <i class="fa-regular fa-square-plus"></i>&nbsp;新增內容管理</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="cell-border">
                            <thead>
                                <tr>
                                    <th>標題名稱</th>
                                    <th>類別名稱</th>
                                    <th>圖片</th>
                                    <th>啓用狀態</th>
                                    <th style="width: 20%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            @if (empty($product->image))
                                                <img src="{{ asset('img/no-image.png') }}" alt="{{ $product->name }}"
                                                    style="width: 150px;">
                                            @else
                                                <img src="{{ asset('images/' . $product->image) }}"
                                                    alt="{{ $product->name }}" style="width: 150px;">
                                            @endif
                                        </td>
                                        <td>{{ $product->status ? '啓用' : '停用' }}</td>
                                        <td>
                                            <a href="{{ route('backend.product.edit', $product->id) }}"
                                                class="btn btn-edit">編輯</a>
                                            <form action="{{ route('backend.product.destroy', $product->id) }}"
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
        });
    </script>
@endsection

@section('css')
@endsection
