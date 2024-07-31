<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>後台登入</title>
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">後台登入</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Login form-->
                                    <form id="formLogin" method="POST" action="{{ route('backend.loginVerify') }}">
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control" id="email" name="email" type="email"
                                                required placeholder="輸入 Email" />
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputPassword">密碼</label>
                                            <input class="form-control" id="password" name="password" type="password"
                                                required placeholder="輸入密碼" />
                                        </div>
                                        <!-- Form Group (remember password checkbox)-->
                                        {{-- <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" id="rememberPasswordCheck"
                                                    type="checkbox" value="" />
                                                <label class="form-check-label" for="rememberPasswordCheck">Remember
                                                    password</label>
                                            </div>
                                        </div> --}}
                                        <!-- Form Group (login box)-->
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            {{-- <a class="small" href="auth-password-basic.html">Forgot Password?</a> --}}
                                            <button type="submit" class="btn btn-primary">登 入</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>

    <script>
        $(function() {

        })
    </script>
</body>

</html>
