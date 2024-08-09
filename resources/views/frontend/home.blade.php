@extends('frontend.layouts.app')

@section('content')
    <!-- Start:主圖輪播-->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{ asset('img/carousel/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-5">
                    <h3 class="text-white fw-bold mt-4">綠色循環服務</h3>
                    <p class="mb-2 fs-5">綠野共享，環保露營的最佳解決方案-提供環保裝備租賃服務，分享你的獨特露營故事，共同推動綠色露營文化
                    </p>
                    <a class="btn btn-yellow rounded-pill text-dark py-3 px-5" href="equipment-recycling.html">裝備回收</a>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="{{ asset('img/carousel/carousel-2.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-5">
                    <h3 class="text-white fw-bold mt-4">綠色裝備租賃</h3>
                    <p class="mb-2 fs-5 animated slideInDown">滿足您的不同需求，無論是家庭露營還是背包旅行，提供舒適、安全的居住空間，讓您享受大自然的美好
                    </p>
                    <a class="btn btn-yellow rounded-pill text-dark py-3 px-5" href="tent.html">各類帳篷</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End:主圖輪播-->

    <!-- Start:綠色裝備租賃 -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5">
                <div class="sub-style">
                    <h5 class="sub-title fw-bold px-3 mb-0">我們提供的服務</h5>
                </div>
                <h5 class="display-5 mb-4">綠色裝備租賃</h5>
                <p class="mb-0">提供帳篷、睡袋、烹飪設備、照明和休閒設施等環保裝備租賃，攜手共建環保露營生活</p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="position-relative">
                            <div class="text-white bg-primary fw-bold px-3 py-1 rounded position-absolute kind">
                                {{ $product->category->name }}</div>
                            <div class="service-item rounded">
                                <a href="{{ route('rent.detail', $product->id) }}">
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
            </div>
            <div class="col-12 text-center mt-5"><!--預設本單元第一類-->>
                <a class="btn btn-green rounded-pill text-white py-3 px-5" href="tent.html">更多資訊</a>
            </div>
        </div>
    </div>
    <!-- End:綠色裝備租賃 -->

    <!-- Start:友善營地資訊 -->
    <div class="container-fluid bg-light list py-5 mt-5">
        <div class="container py-5">
            <div class="section-title mb-5">
                <div class="sub-style">
                    <h5 class="sub-title fw-bold px-3 mb-0">營地全攻略</h5>
                </div>
                <h5 class="display-5 mb-4">友善營地資訊</h5>
                <p class="mb-0">友善營地資訊提供合法且綠色營地推廣，包括位置及設施描述，以及預定與查詢服務，為您尋找最佳環境，讓您輕鬆計劃和享受友善、環保的露營之旅</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative list-item">
                        <a href="#">
                            <div class="list-img">
                                <img src="{{ asset('img/place/legal-01.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="">
                            </div>
                        </a>
                        <div class="text-dark bg-yellow fw-bold px-3 py-1 rounded position-absolute"
                            style="top: 10px; right: 10px;">
                            合法</div>
                        <div class="p-4 border border-green border-top-0 rounded-bottom">
                            <h4>合法營地安心露營</h4>
                            <p>選擇合法認證的營地，享受安全無憂的露營體驗</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-green rounded-pill text-dark py-2 px-4 mb-2"><i
                                        class="fa fa-map me-2 text-primary"></i>詳細資訊</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative list-item">
                        <div class="list-img">
                            <a href="#">
                                <img src="{{ asset('img/place/equipment-01.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="">
                        </div></a>
                        <div class="p-4 border border-green border-top-0 rounded-bottom">
                            <h4>滑草場地，戶外新體驗</h4>
                            <p>營區裡有多樣休憩設施，小朋友有溜滑梯、2座...</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-green rounded-pill text-dark py-2 px-4 mb-2"><i
                                        class="fa fa-map-marker me-2 text-secondary"></i>詳細資訊</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative list-item">
                        <a href="#">
                            <div class="list-img">
                                <img src="{{ asset('img/place/legal-02.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="">
                            </div>
                        </a>
                        <div class="text-dark bg-yellow fw-bold px-3 py-1 rounded position-absolute"
                            style="top: 10px; right: 10px;">
                            合法</div>
                        <div class="p-4 border border-green border-top-0 rounded-bottom">
                            <h4>認證露營地品質保障</h4>
                            <p>合法的露營場地，提供安全舒適的露營環境</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-green rounded-pill text-dark py-2 px-4 mb-2"><i
                                        class="fa fa-map me-2 text-primary"></i>詳細資訊</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative list-item">
                        <a href="#">
                            <div class="list-img">
                                <img src="{{ asset('img/place/equipment-02.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="">
                            </div>
                        </a>
                        <div class="p-4 border border-green border-top-0 rounded-bottom">
                            <h4>合法認證放心享受</h4>
                            <p>合法營地讓您露營更安心，享受自然不擔憂</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-green rounded-pill text-dark py-2 px-4 mb-2"><i
                                        class="fa fa-map-marker me-2 text-secondary"></i>詳細資訊</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative list-item">
                        <a href="#">
                            <div class="list-img">
                                <img src="{{ asset('img/place/equipment-03.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="">
                            </div>
                        </a>
                        <div class="p-4 border border-green border-top-0 rounded-bottom">
                            <h4>豪華露營地，游泳池配套</h4>
                            <p>兒童遊樂設施有2座木屋溜滑梯、攀岩牆、月亮...</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-green rounded-pill text-dark py-2 px-4 mb-2"><i
                                        class="fa fa-map-marker me-2 text-secondary"></i>詳細資訊</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative list-item">
                        <a href="#">
                            <div class="list-img">
                                <img src="{{ asset('img/place/legal-03.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="">
                            </div>
                        </a>
                        <div class="text-dark bg-yellow fw-bold px-3 py-1 rounded position-absolute"
                            style="top: 10px; right: 10px;">
                            合法</div>
                        <div class="p-4 border border-green border-top-0 rounded-bottom">
                            <h4>親子露營，溜滑梯樂園</h4>
                            <p>露營地設有溜滑梯，為小朋友帶來無限歡樂</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-green rounded-pill text-dark py-2 px-4 mb-2"><i
                                        class="fa fa-map me-2 text-primary"></i>詳細資訊</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-5">
                <a class="btn btn-green rounded-pill text-white py-3 px-5" href="friendly-campsite.html">更多資訊</a>
            </div>
        </div>
    </div>
    <!-- End:友善營地資訊 -->

    <!-- Start:用戶經營分享 -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5">
                <div class="sub-style">
                    <h5 class="sub-title fw-bold px-3 mb-0">綠色露營推廣服務</h5>
                </div>
                <h5 class="display-5 mb-4">用戶經營分享</h5>
                <p class="mb-0">分享露營經驗，交換環保裝備，讓每次露營都更加精彩，共同推動綠色生活</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="blog-item rounded">
                        <a href="user-operation-sharing.html">
                            <div class="blog-img">
                                <img src="{{ asset('img/blog/blog-1.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </a>
                        <div class="blog-centent p-4">

                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-green"></i> 01 01 2024
                                </p>
                            </div>
                            <a href="user-operation-sharing.html" class="h5 fw-bold">露營經驗大分享，教你輕鬆入門</a>
                            <p class="my-4">用戶分享露營心得，助您輕鬆開始綠色露營之旅</p>
                            <!-- <a href="#" class="btn btn-green rounded-pill text-white py-2 px-4 mb-1">詳細資訊</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="blog-item rounded">
                        <a href="user-operation-sharing.html">
                            <div class="blog-img">
                                <img src="{{ asset('img/blog/blog-2.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </a>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-green"></i> 01 01 2024
                                </p>
                            </div>
                            <a href="user-operation-sharing.html" class="h5 fw-bold">環保裝備交換提升露營體驗</a>
                            <p class="my-4">用戶間交換環保裝備，共享更舒適的露營生活</p>
                            <!-- <a href="#" class="btn btn-green rounded-pill text-white py-2 px-4 mb-1">詳細資訊</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="blog-item rounded">
                        <a href="user-operation-sharing.html">
                            <div class="blog-img">
                                <img src="{{ asset('img/blog/blog-3.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </a>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-green"></i> 01 01 2024
                                </p>
                            </div>
                            <a href="user-operation-sharing.html" class="h5 fw-bold">裝備交換新平台，綠色露營更簡單</a>
                            <p class="my-4">用戶經營的裝備交換平台，讓綠色露營變得更方便</p>
                            <!-- <a href="#" class="btn btn-green rounded-pill text-white py-2 px-4 mb-1">詳細資訊</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="blog-item rounded">
                        <a href="user-operation-sharing.html">
                            <div class="blog-img">
                                <img src="{{ asset('img/blog/blog-4.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </a>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-green"></i> 01 01 2024
                                </p>
                            </div>
                            <a href="user-operation-sharing.html" class="h5 fw-bold">用戶社區：露營技巧與裝備分享</a>
                            <p class="my-4">在用戶社區中分享露營技巧與裝備，提升戶外樂趣</p>
                            <!-- <a href="#" class="btn btn-green rounded-pill text-white py-2 px-4 mb-1">詳細資訊</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-5">
                <a class="btn btn-green rounded-pill text-white py-3 px-5" href="#">更多資訊</a>
            </div>
        </div>
    </div>
    <!-- End:用戶經營分享 -->
@endsection

@section('css')
@endsection

@section('js')
@endsection
