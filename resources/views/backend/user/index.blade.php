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
                                使用者管理
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

                <div class="card-header">使用者管理</div>
                <div class="card-body">
                    <!-- // TODO: 這裏要增加兩個按鈕，一個是新增選單，一個是刪除 -->
                    <a href="{{ route('backend.user.create') }}" class="btn btn-add">
                        <i class="fa-regular fa-square-plus"></i>&nbsp;新增內容管理</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="cell-border">
                            <thead>
                                <tr>
                                    <th>名稱</th>
                                    <th>E-mail</th>
                                    <th style="width: 20%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->id != 1)
                                                <a href="{{ route('backend.user.edit', $user->id) }}"
                                                    class="btn btn-edit">編輯</a>
                                            @endif
                                            <form action="{{ route('backend.user.destroy', $user->id) }}" method="POST"
                                                class="d-inline">
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
        <div style="margin-bottom: 20px"></div>
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
