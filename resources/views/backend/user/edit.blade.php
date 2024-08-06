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
                                使用者 - 修改
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-xl px-4 mt-4">
            <div class="card">

                <div class="card-header">使用者 - 修改</div>
                <div class="card-body">
                    <x:form::form method="PUT" id="form_post" enctype="multipart/form-data"
                        :action="route('backend.user.update', $user)" :bind="$user">

                        <div class="mt-3">
                            <x:form::input name="name" label="名稱" required />
                        </div>

                        <div class="mt-3">
                            <x:form::input name="email" label="E-mail" required />
                        </div>

                        <div class="mt-3">
                            <x:form::input name="password" label="密碼（如果不變就留空白，規則：必須英文數字，要一個大寫字母，小寫字母，長度大於 6）" required />
                        </div>

                        <div class="mt-3 text-center">
                            {{-- <x:form::button.link class="btn-secondary" href="{{ route('backend.product.index') }}">取消
                            </x:form::button.link> --}}

                            <x:form::button.submit class="btn-confirm" id="submit">確認存檔</x:form::button.submit>

                        </div>
                    </x:form::form>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 20px"></div>
    </main>
@endsection

@section('js')
    <script>
        $(function() {
            $('#form_post').on('submit', function() {

                let name = $('input[name="name"]').val();
                let email = $('input[name="email"]').val();
                let password = $('input[name="password"]').val();
                let status = $('input[name="status"]').val();
                let errors = [];

                if (name == '') {
                    errors.push('請輸入名稱');
                }

                if (email == '') {
                    errors.push('請輸入 E-mail');
                }

                if (password != '') {
                    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
                    if (!passwordRegex.test(password)) {
                        errors.push('密碼必須包含至少一個大寫字母、一個小寫字母，且長度大於 6 個字符。');
                    }
                }

                if (errors.length > 0) {
                    alert(errors.join('\n'));
                    return false;
                }
            });

        });
    </script>
@endsection
