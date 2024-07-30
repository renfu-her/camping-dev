<!-- resources/views/partials/menu.blade.php -->

<div class="container-fluid fixed-top position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="text-white m-0"><img src="{{ asset('img/logo.svg') }}" class="img-fluid" width="250px"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">

                @foreach ($menu as $item)
                    @if (isset($item['children']))
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">{{ $item['name'] }}</a>
                            <div class="dropdown-menu m-0">
                                @foreach ($item['children'] as $child)
                                    <a href="{{ $child['slug'] }}" class="dropdown-item">{{ $child['name'] }}</a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ $item['slug'] }}" class="nav-item nav-link">{{ $item['name'] }}</a>
                    @endif
                @endforeach

            </div>
            <a href="#" class="btn btn-green rounded-circle text-white flex-wrap flex-sm-shrink-0"
                data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></a>
    </nav>
</div>
