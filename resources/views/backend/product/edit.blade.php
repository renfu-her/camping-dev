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
                                內容管理 - 修改
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-xl px-4 mt-4">
            <div class="card">

                {{-- <div class="card-header">內容管理 - 修改</div> --}}
                <div class="card-body">
                    <x:form::form method="PUT" id="form_post" enctype="multipart/form-data"
                        :action="route('backend.product.update', $product)" :bind="$product">
                        <div class="mt-3">
                            <x:form::select class="form-select" name="category_id" label="類別" :options="$categories"
                                required />
                        </div>

                        <div class="mt-3">
                            <x:form::input name="name" label="產品名稱" required />
                        </div>



                        <div class="mt-3">
                            <div class="mb-3">
                                <label for="text-name" class="form-label">封面圖片預覽</label> <br>
                                @if (!empty($product->image))
                                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                        style="width: 250px;">
                                @else
                                    <img src="{{ asset('img/no-image.png') }}" alt="{{ $product->name }}"
                                        style="width: 250px;">
                                @endif
                            </div>
                        </div>

                        <div class="mt-3">
                            <x:form::input type="file" name="image" label="封面圖片 (建議尺寸：800 * 600)" required />
                        </div>

                        <div class="mt-3">
                            <x:form::input name="description" label="簡短說明名稱 (字數：30個字)" maxlength="30" required />
                        </div>


                        <div class="mt-3">
                            <div class="mb-3">
                                <label for="text-name" class="form-label">主題圖片預覽</label> <br>
                                @if (!empty($product->content_image))
                                    <img src="{{ asset('images/' . $product->content_image) }}"
                                        alt="{{ $product->content_name }}" style="width: 250px;">
                                @else
                                    <img src="{{ asset('img/no-image.png') }}" alt="{{ $product->name }}"
                                        style="width: 250px;">
                                @endif
                            </div>
                        </div>

                        <div class="mt-3">
                            <x:form::input type="file" name="content_image" label="主題圖片 (建議尺寸：960 * 430)" required />
                        </div>

                        <div class="mt-3">
                            <x:form::textarea name="content" id="content" label="內容說明" rows="10" required />
                        </div>

                        <div class="mt-3">
                            <x:form::input type="number" name="sort" label="排序" required />
                        </div>

                        <div class="mt-3">
                            <x:form::select class="form-control" name="status" label="啓用狀態"
                                :options="[1 => '啓用', 0 => '停用']" :selected="[1]" />
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
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(function() {
            tinymce.init({
                selector: 'textarea',
                height: 800,
                plugins: [
                    'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor',
                    'pagebreak', 'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code',
                    'fullscreen', 'insertdatetime', 'media', 'table', 'emoticons', 'help'
                ],
                toolbar: 'undo redo | styles | bold italic fontsize forecolor | alignleft aligncenter alignright alignjustify | ' +
                    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                    'forecolor backcolor emoticons | help',
                menu: {
                    favs: {
                        title: 'My Favorites',
                        items: 'code visualaid | searchreplace | emoticons'
                    }
                },
                language: 'zh_TW',
                promotion: false,
                images_upload_url: '/image/upload',
                images_upload_handler: my_image_upload_handler,
            });

            $('#form_post').on('submit', function() {

                let cactegoty_id = $('input[name="category_id"]').val();
                let name = $('input[name="name"]').val();
                let image = $('input[name="image"]').val();
                let contet_image = $('input[name="content_image"]').val();
                let description = $('input[name="description"]').val();
                let content = tinymce.get('content').getContent();
                let sort = $('input[name="sort"]').val();
                let status = $('input[name="status"]').val();
                let errors = [];

                // console.log(content);

                if (cactegoty_id == '') {
                    errors.push('請選擇類別');
                }

                if (name == '') {
                    errors.push('請輸入產品名稱');
                }

                if (image == '') {
                    errors.push('請上傳封面圖片');
                }

                if (content_image == '') {
                    errors.push('請上傳內容圖片');
                }

                if (description == '') {
                    errors.push('請輸入簡短說明名稱');
                }

                if (content == '') {
                    errors.push('請輸入內容說明');
                }

                if (sort == '') {
                    errors.push('請輸入排序');
                }

                if (errors.length > 0) {
                    alert(errors.join('\n'));
                    return false;
                }
            });


        });


        const my_image_upload_handler = (blobInfo, progress) => new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/image/upload');

            xhr.upload.onprogress = (e) => {
                progress(e.loaded / e.total * 100);
            };

            xhr.onload = () => {
                if (xhr.status === 403) {
                    reject({
                        message: 'HTTP Error: ' + xhr.status,
                        remove: true
                    });
                    return;
                }

                if (xhr.status < 200 || xhr.status >= 300) {
                    reject('HTTP Error: ' + xhr.status);
                    return;
                }

                const json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    reject('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                resolve(json.location);
            };

            xhr.onerror = () => {
                reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
            };

            const formData = new FormData();
            formData.append('image', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        });
    </script>
@endsection
