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
                                選單 - 修改
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-xl px-4 mt-4">
            <div class="card">

                <div class="card-header">選單 - 修改</div>
                <div class="card-body">
                    <x:form::form method="PUT" id="form_post" enctype="multipart/form-data"
                        :action="route('backend.category.update', $category)" :bind="$category">
                        <div class="mt-3">
                            <x:form::select class="form-select" name="parent_id" label="父選單" :options="$categories" required />
                        </div>

                        <div class="mt-3">
                            <x:form::input name="name" label="選單名稱" required />
                        </div>
                        <div class="mt-3">
                            <x:form::input name="slug" label="選單連結" required />
                        </div>
                        <div class="mt-3">
                            <x:form::input type="number" name="sort" label="選單排序" required />
                        </div>

                        <div class="mt-3">
                            <x:form::select class="form-control" name="status" label="啓用狀態"
                                :options="[1 => '啓用', 0 => '停用']" required />
                        </div>

                        <div class="mt-3 text-center">
                            <x:form::button.link class="btn-secondary" href="{{ route('backend.category.index') }}">取消
                            </x:form::button.link>

                            <x:form::button.submit id="submit">確認存檔</x:form::button.submit>

                        </div>
                    </x:form::form>
                </div>
            </div>
        </div>

    </main>
@endsection
