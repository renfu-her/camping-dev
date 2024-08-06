<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="utf-8">
    <title>榮享-綠色露營共享平台</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.svg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap">

    <link rel="stylesheet" href="{{ asset('js/fontawesome/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/bootstrap-icons/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('js/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/owlcarousel/assets/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- Start:Topbar-->
    <div class="container-fluid bg-green px-5">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap d-none d-lg-block text-start">
                    <div class="d-flex align-items-center justify-content-start py-2">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end align-items-center py-2">
                <a href="#" class="link-yellow fw-bold me-2">購物車</a>
                <a href="#" class="link-yellow fw-bold me-2">我的訂單</a>
                <a href="#" class="link-yellow fw-bold me-2">顧客中心</a>
                <a href="#" class="link-yellow fw-bold me-1">註冊</a>|<a href="#"
                    class="link-yellow fw-bold ms-1">登入</a>
            </div>
        </div>
    </div>
    <!-- End:Topbar-->

    <!-- 主選單 -->
    @include('partials.menu')

    @yield('content')

    <!-- Start:Copyright  -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-12 text-center mb-md-0">
                    <div class="d-flex align-items-center justify-content-center mb-3 d-lg-none">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="text-white"><a href="#" class="text-white"><i
                                class="fas fa-copyright text-white me-2"></i>榮享-綠色露營共享平台</a>, 版權所有.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End:Copyright  -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-yellow btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="搜尋"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3 bg-green"><i
                                class="fa fa-search text-white"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(Session::has('error'))
        <script>
            alert("{{ Session::get('error') }}");
        </script>
    @endif

    <!-- Modal Search End -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/easing/easing.min.js') }}"></script>
    <script src="{{ asset('js/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('js/style.js') }}"></script>

</body>

</html>
