@extends('frontend.layouts.app')

@section('content')
    <!-- Start:抬頭區塊 -->
    <div class="container-fluid bg-breadcrumb bgimg02">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">循環材料新創商品</h1>
                <ol class="breadcrumb justify-content-center mb-0 fw-bold">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="recycle.html">綠色裝備租賃</a></li>
                    <li class="breadcrumb-item active text-yellow">{{ $category->name }}</li>
                </ol>
        </div>
    </div>
    <!-- End:抬頭區塊 -->

    <!-- Start:循環材料新創商品 -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="position-relative">
                            <div class="service-item rounded">
                                <a href="#">
                                    <div class="service-img rounded-top">
                                        <img src="{{ asset('images/' . $product->image) }}"
                                            class="img-fluid rounded-top w-100" alt="">
                                    </div>
                                </a>
                                <div class="service-content rounded-bottom bg-light p-4">
                                    <div class="service-content-inner">
                                        <h5 class="mb-4">{{ $product->name }}</h5>
                                        <p class="mb-4">{{ $product->description }}...</p>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="{{ route('rent.detail', $product->id) }}"
                                                class="btn btn-outline-green rounded-pill text-dark py-2 px-4 mb-2">詳細資訊</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $products->links('pagination.custom') }}

            </div>
        </div>
        <!-- End:循環材料新創商品 -->
    @endsection

    @section('js')
    @endsection

    @section('css')
    @endsection
