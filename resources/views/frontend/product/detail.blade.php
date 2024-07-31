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

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4 justify-content-center text-dark">
                <div class="row ">
                    <img src="{{ asset('images/' . $product->content_image) }}" class="img-fluid my-5">
                    <div>
                        {!! $product->content !!}
                    </div>

                </div>
            </div>
        </div>
    @endsection

    @section('js')
    @endsection

    @section('css')
    @endsection
