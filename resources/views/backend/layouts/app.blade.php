<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('admin/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('admin/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('admin/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet"
        href="{{ asset('admin/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/plugins/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/plugins/flatpickr/flatpickr.min.css') }}">

    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('admin/css/oneui.min.css') }}">

</head>

<body>

    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->
                <a class="img-link me-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="{{ asset('admin/media/avatars/avatar10.jpg') }}"
                        alt="">
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ms-2">
                    <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout"
                    data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Side Overlay Tabs -->
                <div class="block block-transparent pull-x pull-t">
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab"
                                data-bs-target="#so-overview" role="tab" aria-controls="so-overview"
                                aria-selected="true">
                                <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab"
                                data-bs-target="#so-sales" role="tab" aria-controls="so-sales"
                                aria-selected="false">
                                <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
                            </button>
                        </li>
                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Overview Tab -->
                        <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel"
                            aria-labelledby="so-overview-tab" tabindex="0">
                            <!-- Activity -->
                            <div class="block block-transparent">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Recent Activity</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Activity List -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale ($15)</div>
                                                    <div>Admin Template</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-pencil-alt text-info"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">You edited the file</div>
                                                    <div>Documentation.doc</div>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Project deleted</div>
                                                    <div>Line Icon Set</div>
                                                    <small class="text-muted">4 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Activity List -->
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Online Friends -->
                            <div class="block block-transparent">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Online Friends</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Users Navigation -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="{{ asset('admin/media/avatars/avatar2.jpg') }}"
                                                        alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Carol Ray</div>
                                                    <div class="text-muted">Copywriter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="{{ asset('admin/media/avatars/avatar12.jpg') }}"
                                                        alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Scott Young</div>
                                                    <div class="text-muted">Web Developer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="{{ asset('admin/media/avatars/avatar3.jpg') }}"
                                                        alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Sara Fields</div>
                                                    <div class="text-muted">Web Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="{{ asset('admin/media/avatars/avatar5.jpg') }}"
                                                        alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Judy Ford</div>
                                                    <div class="text-muted">Photographer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="{{ asset('admin/media/avatars/avatar16.jpg') }}"
                                                        alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Jack Greene</div>
                                                    <div class="text-muted">Graphic Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Users Navigation -->
                                </div>
                            </div>
                            <!-- END Online Friends -->

                            <!-- Quick Settings -->
                            <div class="block block-transparent mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Quick Settings</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Quick Settings Form -->
                                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-2">
                                                Online Status
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check1" name="so-settings-check1" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check1">Show
                                                    your status to all</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-2">
                                                Auto Updates
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check2" name="so-settings-check2" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check2">Keep up
                                                    to date</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-1">
                                                Application Alerts
                                            </p>
                                            <div class="space-y-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="so-settings-check3" name="so-settings-check3" checked>
                                                    <label class="form-check-label fs-sm"
                                                        for="so-settings-check3">Email Notifications</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="so-settings-check4" name="so-settings-check4" checked>
                                                    <label class="form-check-label fs-sm" for="so-settings-check4">SMS
                                                        Notifications</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-1">
                                                API
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check5" name="so-settings-check5" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check5">Enable
                                                    access</label>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Quick Settings Form -->
                                </div>
                            </div>
                            <!-- END Quick Settings -->
                        </div>
                        <!-- END Overview Tab -->

                        <!-- Sales Tab -->
                        <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel"
                            aria-labelledby="so-sales-tab" tabindex="0">
                            <div class="block block-transparent mb-0">
                                <!-- Stats -->
                                <div class="block-content">
                                    <div class="row items-push pull-t">
                                        <div class="col-6">
                                            <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                                            <a class="fs-lg" href="javascript:void(0)">22.030</a>
                                        </div>
                                        <div class="col-6">
                                            <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                                            <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Stats -->

                                <!-- Today -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="fs-sm fw-semibold text-uppercase">Today</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="ext-muted">$996</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $249</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $129</div>
                                                    <small class="text-muted">50 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">2 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $499</div>
                                                    <small class="text-muted">3 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Today -->

                                <!-- Yesterday -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="text-muted">$765</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $249</div>
                                                    <small class="text-muted">26 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-minus text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Product Purchase - $50</div>
                                                    <small class="text-muted">28 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">29 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-minus text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Paypal Withdrawal - $300</div>
                                                    <small class="text-muted">37 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $129</div>
                                                    <small class="text-muted">39 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">45 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $499</div>
                                                    <small class="text-muted">46 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- More -->
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                            <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                                        </a>
                                    </div>
                                    <!-- END More -->
                                </div>
                                <!-- END Yesterday -->
                            </div>
                        </div>
                        <!-- END Sales Tab -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header">
                <!-- Logo -->
                <a class="fw-semibold text-dual" href="index.html">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary"></i>
                    </span>
                    <span class="smini-hide fs-5 tracking-wider">OneUI</span>
                </a>
                <!-- END Logo -->

                <!-- Extra -->
                <div>
                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                        data-action="dark_mode_toggle">
                        <i class="far fa-moon"></i>
                    </button>
                    <!-- END Dark Mode -->

                    <!-- Options -->
                    <div class="dropdown d-inline-block ms-1">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-brush"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
                            aria-labelledby="sidebar-themes-dropdown">
                            <!-- Color Themes -->
                            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                                <i class="fa fa-circle text-default"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="{{ asset('admin/css/themes/amethyst.min.css') }}"
                                href="#">
                                <span>Amethyst</span>
                                <i class="fa fa-circle text-amethyst"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="{{ asset('admin/css/themes/city.min.css') }}"
                                href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="{{ asset('admin/css/themes/flat.min.css') }}"
                                href="#">
                                <span>Flat</span>
                                <i class="fa fa-circle text-flat"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="{{ asset('admin/css/themes/modern.min.css') }}"
                                href="#">
                                <span>Modern</span>
                                <i class="fa fa-circle text-modern"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="{{ asset('admin/css/themes/smooth.min.css') }}"
                                href="#">
                                <span>Smooth</span>
                                <i class="fa fa-circle text-smooth"></i>
                            </a>
                            <!-- END Color Themes -->

                            <div class="dropdown-divider"></div>

                            <!-- Sidebar Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light"
                                href="javascript:void(0)">
                                <span>Sidebar Light</span>
                            </a>
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark"
                                href="javascript:void(0)">
                                <span>Sidebar Dark</span>
                            </a>
                            <!-- END Sidebar Styles -->

                            <div class="dropdown-divider"></div>

                            <!-- Header Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light"
                                href="javascript:void(0)">
                                <span>Header Light</span>
                            </a>
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark"
                                href="javascript:void(0)">
                                <span>Header Dark</span>
                            </a>
                            <!-- END Header Styles -->
                        </div>
                    </div>
                    <!-- END Options -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout"
                        data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Extra -->
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_dashboard.html">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-layers"></i>
                                <span class="nav-main-link-name">Page Packs</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-bag"></i>
                                        <span class="nav-main-link-name">e-Commerce</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                                                <span class="nav-main-link-name">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_orders.html">
                                                <span class="nav-main-link-name">Orders</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_order.html">
                                                <span class="nav-main-link-name">Order</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_products.html">
                                                <span class="nav-main-link-name">Products</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                                                <span class="nav-main-link-name">Product Edit</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_customer.html">
                                                <span class="nav-main-link-name">Customer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-handbag"></i>
                                        <span class="nav-main-link-name">e-Commerce Store</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_home.html">
                                                <span class="nav-main-link-name">Home</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_search.html">
                                                <span class="nav-main-link-name">Search Results</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_products.html">
                                                <span class="nav-main-link-name">Products List</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_product.html">
                                                <span class="nav-main-link-name">Product Page</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_checkout.html">
                                                <span class="nav-main-link-name">Checkout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-pencil"></i>
                                        <span class="nav-main-link-name">Blog</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_classic.html">
                                                <span class="nav-main-link-name">Classic</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_list.html">
                                                <span class="nav-main-link-name">List</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_grid.html">
                                                <span class="nav-main-link-name">Grid</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_story.html">
                                                <span class="nav-main-link-name">Story</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                                                <span class="nav-main-link-name">Story Cover</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-graduation"></i>
                                        <span class="nav-main-link-name">e-Learning</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_elearning_courses.html">
                                                <span class="nav-main-link-name">Courses</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_elearning_course.html">
                                                <span class="nav-main-link-name">Course</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                                                <span class="nav-main-link-name">Lesson</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-bubbles"></i>
                                        <span class="nav-main-link-name">Forum</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_forum_categories.html">
                                                <span class="nav-main-link-name">Categories</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_forum_topics.html">
                                                <span class="nav-main-link-name">Topics</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_forum_discussion.html">
                                                <span class="nav-main-link-name">Discussion</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-magnet"></i>
                                        <span class="nav-main-link-name">Boxed Backend</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_dashboard.html">
                                                <span class="nav-main-link-name">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_search.html">
                                                <span class="nav-main-link-name">Search</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_simple_1.html">
                                                <span class="nav-main-link-name">Simple 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_simple_2.html">
                                                <span class="nav-main-link-name">Simple 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_image_1.html">
                                                <span class="nav-main-link-name">Image 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_image_2.html">
                                                <span class="nav-main-link-name">Image 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_video_1.html">
                                                <span class="nav-main-link-name">Video 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_video_2.html">
                                                <span class="nav-main-link-name">Video 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">User Interface</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Blocks</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_styles.html">
                                        <span class="nav-main-link-name">Styles</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_options.html">
                                        <span class="nav-main-link-name">Options</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_forms.html">
                                        <span class="nav-main-link-name">Forms</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_themed.html">
                                        <span class="nav-main-link-name">Themed</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_api.html">
                                        <span class="nav-main-link-name">API</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-trophy"></i>
                                <span class="nav-main-link-name">Widgets</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_widgets_tiles.html">
                                        <span class="nav-main-link-name">Tiles</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_widgets_users.html">
                                        <span class="nav-main-link-name">Users</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_widgets_stats.html">
                                        <span class="nav-main-link-name">Statistics</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_widgets_blog.html">
                                        <span class="nav-main-link-name">Blog</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-badge"></i>
                                <span class="nav-main-link-name">Elements</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_grid.html">
                                        <span class="nav-main-link-name">Grid</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_typography.html">
                                        <span class="nav-main-link-name">Typography</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_icons.html">
                                        <span class="nav-main-link-name">Icons</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_buttons.html">
                                        <span class="nav-main-link-name">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_buttons_groups.html">
                                        <span class="nav-main-link-name">Button Groups</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_dropdowns.html">
                                        <span class="nav-main-link-name">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_tabs.html">
                                        <span class="nav-main-link-name">Tabs</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_navigation.html">
                                        <span class="nav-main-link-name">Navigation</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_navigation_horizontal.html">
                                        <span class="nav-main-link-name">Horizontal Navigation</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_mega_menu.html">
                                        <span class="nav-main-link-name">Mega Menu</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_progress.html">
                                        <span class="nav-main-link-name">Progress</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_alerts.html">
                                        <span class="nav-main-link-name">Alerts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_tooltips.html">
                                        <span class="nav-main-link-name">Tooltips</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_popovers.html">
                                        <span class="nav-main-link-name">Popovers</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_modals.html">
                                        <span class="nav-main-link-name">Modals</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_images.html">
                                        <span class="nav-main-link-name">Images Overlay</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_timeline.html">
                                        <span class="nav-main-link-name">Timeline</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_ribbons.html">
                                        <span class="nav-main-link-name">Ribbons</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_steps.html">
                                        <span class="nav-main-link-name">Steps</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_animations.html">
                                        <span class="nav-main-link-name">Animations</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_color_themes.html">
                                        <span class="nav-main-link-name">Color Themes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Tables</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_styles.html">
                                        <span class="nav-main-link-name">Styles</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_responsive.html">
                                        <span class="nav-main-link-name">Responsive</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_helpers.html">
                                        <span class="nav-main-link-name">Helpers</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_datatables.html">
                                        <span class="nav-main-link-name">DataTables</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item open">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="true" href="#">
                                <i class="nav-main-link-icon si si-note"></i>
                                <span class="nav-main-link-name">Forms</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_elements.html">
                                        <span class="nav-main-link-name">Elements</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_layouts.html">
                                        <span class="nav-main-link-name">Layouts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_input_groups.html">
                                        <span class="nav-main-link-name">Input Groups</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link active" href="be_forms_plugins.html">
                                        <span class="nav-main-link-name">Plugins</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_editors.html">
                                        <span class="nav-main-link-name">Editors</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">CKEditor 5</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_forms_ckeditor5_classic.html">
                                                <span class="nav-main-link-name">Classic</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_forms_ckeditor5_inline.html">
                                                <span class="nav-main-link-name">Inline</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_validation.html">
                                        <span class="nav-main-link-name">Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Develop</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-wrench"></i>
                                <span class="nav-main-link-name">Components</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Loaders</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Image Cropper</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_appear.html">
                                        <span class="nav-main-link-name">Appear</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_charts.html">
                                        <span class="nav-main-link-name">Charts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_calendar.html">
                                        <span class="nav-main-link-name">Calendar</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_sliders.html">
                                        <span class="nav-main-link-name">Sliders</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_carousel.html">
                                        <span class="nav-main-link-name">Carousel</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_offcanvas.html">
                                        <span class="nav-main-link-name">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                                        <span class="nav-main-link-name">Syntax Highlighting</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_rating.html">
                                        <span class="nav-main-link-name">Rating</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_maps_vector.html">
                                        <span class="nav-main-link-name">Vector Maps</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_dialogs.html">
                                        <span class="nav-main-link-name">Dialogs</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_notifications.html">
                                        <span class="nav-main-link-name">Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_gallery.html">
                                        <span class="nav-main-link-name">Gallery</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-magic-wand"></i>
                                <span class="nav-main-link-name">Layout</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Page</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_page_default.html">
                                                <span class="nav-main-link-name">Default</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_page_flipped.html">
                                                <span class="nav-main-link-name">Flipped</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                                                <span class="nav-main-link-name">Native Scrolling</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Dark Mode</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_dark_mode_on.html">
                                                <span class="nav-main-link-name">On</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_dark_mode_off.html">
                                                <span class="nav-main-link-name">Off</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Main Content</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                                <span class="nav-main-link-name">Full Width</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                                <span class="nav-main-link-name">Narrow</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                                                <span class="nav-main-link-name">Boxed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Header</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-heading">Fixed</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                                                <span class="nav-main-link-name">Light</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                                                <span class="nav-main-link-name">Dark</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-heading">Static</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_static_light.html">
                                                <span class="nav-main-link-name">Light</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_static_dark.html">
                                                <span class="nav-main-link-name">Dark</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Sidebar</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                                                <span class="nav-main-link-name">Mini</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_light.html">
                                                <span class="nav-main-link-name">Light</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                                                <span class="nav-main-link-name">Dark</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                                                <span class="nav-main-link-name">Hidden</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Side Overlay</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                                                <span class="nav-main-link-name">Visible</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                                                <span class="nav-main-link-name">Hover Mode</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link"
                                                href="be_layout_side_overlay_no_page_overlay.html">
                                                <span class="nav-main-link-name">No Page Overlay</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_api.html">
                                        <span class="nav-main-link-name">API</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-puzzle"></i>
                                <span class="nav-main-link-name">Multi Level Menu</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 1-1</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 1-2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Sub Level 2</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 2-1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 2-2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">Sub Level 3</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 3-1</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 3-2</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu"
                                                        data-toggle="submenu" aria-haspopup="true"
                                                        aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Sub Level 4</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 4-1</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 4-2</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Sub Level 5</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link
                                                                            5-1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link
                                                                            5-2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link nav-main-link-submenu"
                                                                        data-toggle="submenu" aria-haspopup="true"
                                                                        aria-expanded="false" href="#">
                                                                        <span class="nav-main-link-name">Sub Level
                                                                            6</span>
                                                                    </a>
                                                                    <ul class="nav-main-submenu">
                                                                        <li class="nav-main-item">
                                                                            <a class="nav-main-link" href="#">
                                                                                <span class="nav-main-link-name">Link
                                                                                    6-1</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-main-item">
                                                                            <a class="nav-main-link" href="#">
                                                                                <span class="nav-main-link-name">Link
                                                                                    6-2</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Pages</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-layers"></i>
                                <span class="nav-main-link-name">Generic</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_blank.html">
                                        <span class="nav-main-link-name">Blank</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                                        <span class="nav-main-link-name">Blank with Block</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_search.html">
                                        <span class="nav-main-link-name">Search</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_profile.html">
                                        <span class="nav-main-link-name">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                                        <span class="nav-main-link-name">Profile Edit</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_inbox.html">
                                        <span class="nav-main-link-name">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_invoice.html">
                                        <span class="nav-main-link-name">Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_pricing_plans.html">
                                        <span class="nav-main-link-name">Pricing Plans</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_faq.html">
                                        <span class="nav-main-link-name">FAQ</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_team.html">
                                        <span class="nav-main-link-name">Team</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_contact.html">
                                        <span class="nav-main-link-name">Contact</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_support.html">
                                        <span class="nav-main-link-name">Support</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                                        <span class="nav-main-link-name">Upgrade Plan</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_sidebar_mini_nav.html">
                                        <span class="nav-main-link-name">Sidebar with Mini Nav</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_dashboard_v1.html">
                                        <span class="nav-main-link-name">Dashboard v1</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_maintenance.html">
                                        <span class="nav-main-link-name">Maintenance</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_status.html">
                                        <span class="nav-main-link-name">Status</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_installation.html">
                                        <span class="nav-main-link-name">Installation</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_checkout.html">
                                        <span class="nav-main-link-name">Checkout</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_coming_soon.html">
                                        <span class="nav-main-link-name">Coming Soon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-lock"></i>
                                <span class="nav-main-link-name">Authentication</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_auth_all.html">
                                        <span class="nav-main-link-name">All</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signin.html">
                                        <span class="nav-main-link-name">Sign In</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signin2.html">
                                        <span class="nav-main-link-name">Sign In 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signin3.html">
                                        <span class="nav-main-link-name">Sign In 3</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signup.html">
                                        <span class="nav-main-link-name">Sign Up</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signup2.html">
                                        <span class="nav-main-link-name">Sign Up 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signup3.html">
                                        <span class="nav-main-link-name">Sign Up 3</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_lock.html">
                                        <span class="nav-main-link-name">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_lock2.html">
                                        <span class="nav-main-link-name">Lock Screen 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_lock3.html">
                                        <span class="nav-main-link-name">Lock Screen 3</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_reminder.html">
                                        <span class="nav-main-link-name">Pass Reminder</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_reminder2.html">
                                        <span class="nav-main-link-name">Pass Reminder 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_reminder3.html">
                                        <span class="nav-main-link-name">Pass Reminder 3</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_two_factor.html">
                                        <span class="nav-main-link-name">Two Factor</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_two_factor2.html">
                                        <span class="nav-main-link-name">Two Factor 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_two_factor3.html">
                                        <span class="nav-main-link-name">Two Factor 3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-fire"></i>
                                <span class="nav-main-link-name">Error Pages</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_error_all.html">
                                        <span class="nav-main-link-name">All</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_400.html">
                                        <span class="nav-main-link-name">400</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_401.html">
                                        <span class="nav-main-link-name">401</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_403.html">
                                        <span class="nav-main-link-name">403</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_404.html">
                                        <span class="nav-main-link-name">404</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_500.html">
                                        <span class="nav-main-link-name">500</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_503.html">
                                        <span class="nav-main-link-name">503</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-cup"></i>
                                <span class="nav-main-link-name">Get Started</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="gs_backend.html">
                                        <span class="nav-main-link-name">Backend</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="gs_backend_boxed.html">
                                        <span class="nav-main-link-name">Backend Boxed</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="gs_landing.html">
                                        <span class="nav-main-link-name">Landing</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="gs_rtl_backend.html">
                                        <span class="nav-main-link-name">RTL Backend</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="gs_rtl_backend_boxed.html">
                                        <span class="nav-main-link-name">RTL Backend Boxed</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="gs_rtl_landing.html">
                                        <span class="nav-main-link-name">RTL Landing</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none"
                        data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout"
                        data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->

                    <!-- Search Form (visible on larger screens) -->
                    <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-alt" placeholder="Search.."
                                id="page-header-search-input2" name="page-header-search-input2">
                            <span class="input-group-text border-0">
                                <i class="fa fa-fw fa-search"></i>
                            </span>
                        </div>
                    </form>
                    <!-- END Search Form -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle" src="{{ asset('admin/media/avatars/avatar10.jpg') }}"
                                alt="Header Avatar" style="width: 21px;">
                            <span class="d-none d-sm-inline-block ms-2">John</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="{{ asset('admin/media/avatars/avatar10.jpg') }}" alt="">
                                <p class="mt-2 mb-0 fw-medium">John Smith</p>
                                <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="be_pages_generic_inbox.html">
                                    <span class="fs-sm fw-medium">Inbox</span>
                                    <span class="badge rounded-pill bg-primary ms-2">3</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="be_pages_generic_profile.html">
                                    <span class="fs-sm fw-medium">Profile</span>
                                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span class="fs-sm fw-medium">Settings</span>
                                </a>
                            </div>
                            <div role="separator" class="dropdown-divider m-0"></div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_lock.html">
                                    <span class="fs-sm fw-medium">Lock Account</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_signin.html">
                                    <span class="fs-sm fw-medium">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="text-primary">•</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                                <h5 class="dropdown-header text-uppercase">Notifications</h5>
                            </div>
                            <ul class="nav-items mb-0">
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-2 ms-3">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 pe-2">
                                            <div class="fw-semibold">You have a new follower</div>
                                            <span class="fw-medium text-muted">15 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-2 ms-3">
                                            <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 pe-2">
                                            <div class="fw-semibold">1 new sale, keep it up</div>
                                            <span class="fw-medium text-muted">22 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-2 ms-3">
                                            <i class="fa fa-fw fa-times-circle text-danger"></i>
                                        </div>
                                        <div class="flex-grow-1 pe-2">
                                            <div class="fw-semibold">Update failed, restart server</div>
                                            <span class="fw-medium text-muted">26 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-2 ms-3">
                                            <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 pe-2">
                                            <div class="fw-semibold">2 new sales, keep it up</div>
                                            <span class="fw-medium text-muted">33 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-2 ms-3">
                                            <i class="fa fa-fw fa-user-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 pe-2">
                                            <div class="fw-semibold">You have a new subscriber</div>
                                            <span class="fw-medium text-muted">41 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-2 ms-3">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 pe-2">
                                            <div class="fw-semibold">You have a new follower</div>
                                            <span class="fw-medium text-muted">42 min ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="p-2 border-top text-center">
                                <a class="d-inline-block fw-medium" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary ms-2" data-toggle="layout"
                        data-action="side_overlay_toggle">
                        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                        <div class="flex-grow-1">
                            <h1 class="h3 fw-bold mb-1">
                                Form Plugins
                            </h1>
                            <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                                Carefully integrated JS plugins that will enhance your forms with great features.
                            </h2>
                        </div>
                        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">
                                    <a class="link-fx" href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Plugins
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.jsFlatpickr()) -->
                <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Flatpickr Datetimepicker</h3>
                    </div>
                    <div class="block-content">
                        <form action="be_forms_plugins.html" method="POST" onsubmit="return false;">
                            <h2 class="content-heading border-bottom mb-4 pb-2">Datepickers</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        You can easily change the date format to match your preference
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-6">
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <label class="form-label" for="example-flatpickr-default">Default
                                                format</label>
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-default" name="example-flatpickr-default"
                                                placeholder="Y-m-d">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <label class="form-label" for="example-flatpickr-custom">Custom
                                                format</label>
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-custom" name="example-flatpickr-custom"
                                                placeholder="d-m-Y" data-date-format="d-m-Y">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <label class="form-label" for="example-flatpickr-friendly">Friendly
                                                format</label>
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-friendly" name="example-flatpickr-friendly"
                                                placeholder="F j, Y" data-alt-input="true"
                                                data-date-format="Y-m-d" data-alt-format="F j, Y">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Datepicker Range</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        A date range mode is available, very useful for booking or calendar web apps
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-6">
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-range" name="example-flatpickr-range"
                                                placeholder="Select Date Range" data-mode="range"
                                                data-min-date="today">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Timepicker</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        You can also enable a standalone or integrated timepicker
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-6">
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <label class="form-label"
                                                for="example-flatpickr-time-standalone">Standalone</label>
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-time-standalone"
                                                name="example-flatpickr-time-standalone" data-enable-time="true"
                                                data-no-calendar="true" data-date-format="H:i">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <label class="form-label"
                                                for="example-flatpickr-time-standalone-24">Standalone (24-hour
                                                format)</label>
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-time-standalone-24"
                                                name="example-flatpickr-time-standalone-24" data-enable-time="true"
                                                data-no-calendar="true" data-date-format="H:i"
                                                data-time_24hr="true">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <label class="form-label" for="example-flatpickr-datetime">Calendar and
                                                time picker</label>
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-datetime" name="example-flatpickr-datetime"
                                                data-enable-time="true">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <label class="form-label" for="example-flatpickr-datetime-24">Calendar
                                                and time picker (24-hour format)</label>
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-datetime-24"
                                                name="example-flatpickr-datetime-24" data-enable-time="true"
                                                data-time_24hr="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Inline Mode</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        The plugin also supports an inline mode
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-6">
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-inline" name="example-flatpickr-inline"
                                                placeholder="Inline Datepicker" data-inline="true">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-7">
                                            <input type="text" class="js-flatpickr form-control"
                                                id="example-flatpickr-inline-time"
                                                name="example-flatpickr-inline-time"
                                                placeholder="Inline Datetimepicker" data-inline="true"
                                                data-enable-time="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Flatpickr Datetimepicker -->

                <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange classes are initialized in Helpers.jqDatepicker()) -->
                <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Bootstrap Datepicker</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="be_forms_plugins.html" method="POST" onsubmit="return false;">
                            <h2 class="content-heading border-bottom mb-4 pb-2">Date Formats</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        You can easily change the date format to match your preference
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-4 mb-4">
                                            <input type="text" class="js-datepicker form-control"
                                                id="example-datepicker1" name="example-datepicker1"
                                                data-week-start="1" data-autoclose="true"
                                                data-today-highlight="true" data-date-format="mm/dd/yy"
                                                placeholder="mm/dd/yy">
                                        </div>
                                        <div class="col-xl-4 mb-4">
                                            <input type="text" class="js-datepicker form-control"
                                                id="example-datepicker2" name="example-datepicker2"
                                                data-week-start="1" data-autoclose="true"
                                                data-today-highlight="true" data-date-format="dd/mm/yy"
                                                placeholder="dd/mm/yy">
                                        </div>
                                        <div class="col-xl-4 mb-4">
                                            <input type="text" class="js-datepicker form-control"
                                                id="example-datepicker3" name="example-datepicker3"
                                                data-week-start="1" data-autoclose="true"
                                                data-today-highlight="true" data-date-format="dd-mm-yyyy"
                                                placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Date Range</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        A date range mode is available, very useful for booking or calendar web apps
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-6">
                                    <div class="mb-4">
                                        <div class="input-daterange input-group" data-date-format="mm/dd/yyyy"
                                            data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                            <input type="text" class="form-control" id="example-daterange1"
                                                name="example-daterange1" placeholder="From" data-week-start="1"
                                                data-autoclose="true" data-today-highlight="true">
                                            <span class="input-group-text fw-semibold">
                                                <i class="fa fa-fw fa-arrow-right"></i>
                                            </span>
                                            <input type="text" class="form-control" id="example-daterange2"
                                                name="example-daterange2" placeholder="To" data-week-start="1"
                                                data-autoclose="true" data-today-highlight="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Inline Datepicker</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        The plugin also supports an inline mode
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="mb-4">
                                        <div class="js-datepicker" data-week-start="1"
                                            data-today-highlight="true"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Bootstrap Datepicker -->

                <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.jqMaxlength()) -->
                <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Bootstrap Maxlength</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="be_forms_plugins.html" method="POST" onsubmit="return false;">
                            <h2 class="content-heading border-bottom mb-4 pb-2">Features</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        Check out how many powerful options are availble
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="mb-4">
                                        <label class="form-label" for="example-maxlength1">Normal</label>
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength1" name="example-maxlength1" maxlength="20"
                                            placeholder="Try typing beyond 10 chars..">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-maxlength2">Threshold</label>
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength2" name="example-maxlength2" maxlength="20"
                                            placeholder="When to appear (5 chars).." data-threshold="15">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-maxlength3">Always Show</label>
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength3" name="example-maxlength3" maxlength="20"
                                            placeholder="When focused.." data-always-show="true">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-maxlength4">Custom Text</label>
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength4" name="example-maxlength4" maxlength="20"
                                            placeholder="20 chars limit.." data-always-show="true"
                                            data-pre-text="Used " data-separator=" of "
                                            data-post-text=" characters">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-maxlength5">Themed Label</label>
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength5" name="example-maxlength5" maxlength="20"
                                            placeholder="Primary color of active theme.." data-always-show="true"
                                            data-warning-class="badge bg-primary"
                                            data-limit-reached-class="badge bg-primary">
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Position</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        You can position the tooltip in different spots
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="mb-4">
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength6" name="example-maxlength6" maxlength="20"
                                            placeholder="Top.." data-always-show="true" data-placement="top">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength7" name="example-maxlength7" maxlength="20"
                                            placeholder="Top Right.." data-always-show="true"
                                            data-placement="top-right">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength8" name="example-maxlength8" maxlength="20"
                                            placeholder="Right.." data-always-show="true" data-placement="right">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="js-maxlength form-control"
                                            id="example-maxlength9" name="example-maxlength9" maxlength="20"
                                            placeholder="Bottom Right.." data-always-show="true"
                                            data-placement="bottom-right">
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Textarea</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        There is support for textareas as well
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="mb-4">
                                        <textarea class="js-maxlength form-control" id="example-maxlength10" name="example-maxlength10" rows="5"
                                            maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Bootstrap Maxlength -->

                <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Select2</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="be_forms_plugins.html" method="POST" onsubmit="return false;">
                            <h2 class="content-heading border-bottom mb-4 pb-2">Normal Select Box</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        Default select input turns into a searchable and dynamic list
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="mb-4">
                                        <select class="js-select2 form-select" id="example-select2"
                                            name="example-select2" style="width: 100%;"
                                            data-placeholder="Choose one..">
                                            <option></option>
                                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="1">HTML</option>
                                            <option value="2">CSS</option>
                                            <option value="3">JavaScript</option>
                                            <option value="4">PHP</option>
                                            <option value="5">MySQL</option>
                                            <option value="6">Ruby</option>
                                            <option value="7">Angular</option>
                                            <option value="8">React</option>
                                            <option value="9">Vue.js</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h2 class="content-heading border-bottom mb-4 pb-2">Multiple Select Box</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        Default multiple select input turns into a tags input
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="mb-4">
                                        <select class="js-select2 form-select" id="example-select2-multiple"
                                            name="example-select2-multiple" style="width: 100%;"
                                            data-placeholder="Choose many.." multiple>
                                            <option></option>
                                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="1" selected>HTML</option>
                                            <option value="2" selected>CSS</option>
                                            <option value="3">JavaScript</option>
                                            <option value="4">PHP</option>
                                            <option value="5">MySQL</option>
                                            <option value="6">Ruby</option>
                                            <option value="7">Angular</option>
                                            <option value="8">React</option>
                                            <option value="9">Vue.js</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h2 class="content-heading border-bottom mb-4 pb-2">Select2 in a modal</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    You can easily init it in a modal
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <button type="button" class="btn btn-alt-primary push" data-bs-toggle="modal"
                                    data-bs-target="#modal-block-select2">Launch Modal</button>

                                <!-- Select2 in a modal -->
                                <div class="modal" id="modal-block-select2" tabindex="-1" role="dialog"
                                    aria-labelledby="modal-block-select2" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="block block-rounded block-transparent mb-0">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Select2 in a modal</h3>
                                                    <div class="block-options">
                                                        <button type="button" class="btn-block-option"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="block-content">
                                                    <!-- Select2 is initialized at the bottom of the page -->
                                                    <form action="be_forms_plugins.html" method="POST"
                                                        onsubmit="return false;">
                                                        <div class="mb-4">
                                                            <select class="js-select2 form-select"
                                                                id="example-select2-modal"
                                                                name="example-select2-modal" style="width: 100%;"
                                                                data-container="#modal-block-select2"
                                                                data-placeholder="Choose one..">
                                                                <option></option>
                                                                <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                                <option value="1">HTML</option>
                                                                <option value="2">CSS</option>
                                                                <option value="3">JavaScript</option>
                                                                <option value="4">PHP</option>
                                                                <option value="5">MySQL</option>
                                                                <option value="6">Ruby</option>
                                                                <option value="7">Angular</option>
                                                                <option value="8">React</option>
                                                                <option value="9">Vue.js</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-4">
                                                            <select class="js-select2 form-select"
                                                                id="example-select2-multiple-modal"
                                                                name="example-select2-multiple-modal"
                                                                style="width: 100%;"
                                                                data-container="#modal-block-select2"
                                                                data-placeholder="Choose many.." multiple>
                                                                <option></option>
                                                                <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                                <option value="1" selected>HTML</option>
                                                                <option value="2" selected>CSS</option>
                                                                <option value="3">JavaScript</option>
                                                                <option value="4">PHP</option>
                                                                <option value="5">MySQL</option>
                                                                <option value="6">Ruby</option>
                                                                <option value="7">Angular</option>
                                                                <option value="8">React</option>
                                                                <option value="9">Vue.js</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="block-content block-content-full text-end bg-body">
                                                    <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-dismiss="modal">Perfect</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Select2 in a modal -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Select2 -->

                <!-- Masked Inputs (.js-masked-* classes are initialized in Helpers.jqMaskedInputs()) -->
                <!-- For more info and examples you can check out https://github.com/digitalBush/jquery.maskedinput -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Masked Inputs</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <h2 class="content-heading border-bottom mb-4 pb-2">Examples</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    It enables to easily enter a value following a specific format
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <form action="be_forms_plugins.html" method="POST" onsubmit="return false;">
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-date1">Date (format 1)</label>
                                        <input type="text" class="js-masked-date form-control"
                                            id="example-masked-date1" name="example-masked-date1"
                                            placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-date2">Date (format 2)</label>
                                        <input type="text" class="js-masked-date-dash form-control"
                                            id="example-masked-date2" name="example-masked-date2"
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-phone">Phone</label>
                                        <input type="text" class="js-masked-phone form-control"
                                            id="example-masked-phone" name="example-masked-phone"
                                            placeholder="(999) 999-9999">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-phone-ext">Phone (Ext)</label>
                                        <input type="text" class="js-masked-phone-ext form-control"
                                            id="example-masked-phone-ext" name="example-masked-phone-ext"
                                            placeholder="(999) 999-9999? x99999">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-taxid">Tax ID</label>
                                        <input type="text" class="js-masked-taxid form-control"
                                            id="example-masked-taxid" name="example-masked-taxid"
                                            placeholder="99-9999999">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-ssn">SSN</label>
                                        <input type="text" class="js-masked-ssn form-control"
                                            id="example-masked-ssn" name="example-masked-ssn"
                                            placeholder="999-99-9999">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-pkey">Product Key</label>
                                        <input type="text" class="js-masked-pkey form-control"
                                            id="example-masked-pkey" name="example-masked-pkey"
                                            placeholder="a*-999-a999">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-time">Time Format</label>
                                        <input type="text" class="js-masked-time form-control"
                                            id="example-masked-time" name="example-masked-time"
                                            placeholder="00:00">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Masked Inputs -->

                <!-- Ion Range Sliders (.js-rangeslider class is initialized in Helpers.jqRangeslider()) -->
                <!-- For more info and examples you can check out https://github.com/IonDen/ion.rangeSlider -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Ion Range Sliders</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <h2 class="content-heading border-bottom mb-4 pb-2">Examples</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    Turn your inputs into modern and clean sliders
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-6">
                                <form action="be_forms_plugins.html" method="POST" onsubmit="return false;">
                                    <div class="mb-4">
                                        <label class="form-label">Normal</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider1"
                                            name="example-rangeslider1" value="25">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Min Max</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider2"
                                            name="example-rangeslider2" value="330" data-min="0"
                                            data-max="1000">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Grid</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider3"
                                            name="example-rangeslider3" value="660" data-grid="true"
                                            data-min="0" data-max="1000">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Double</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider4"
                                            name="example-rangeslider4" data-type="double" data-grid="true"
                                            data-min="0" data-max="1000" data-from="200" data-to="800">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Negative</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider5"
                                            name="example-rangeslider5" data-type="double" data-grid="true"
                                            data-min="-500" data-max="500" data-from="-150" data-to="150">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Step</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider6"
                                            name="example-rangeslider6" data-type="double" data-grid="true"
                                            data-min="-500" data-max="500" data-from="-250" data-to="250"
                                            data-step="50">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Custom</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider7"
                                            name="example-rangeslider7" data-grid="true" data-from="5"
                                            data-values="January, February, March, April, May, June, July, August, September, October, November, December">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Prefixes</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider8"
                                            name="example-rangeslider8" data-type="double" data-grid="true"
                                            data-min="0" data-max="10000" data-from="2500" data-to="7500"
                                            data-prefix="$">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Postfixes</label>
                                        <input type="text" class="js-rangeslider" id="example-rangeslider9"
                                            name="example-rangeslider9" data-grid="true" data-min="-20"
                                            data-max="90" data-from="35" data-postfix="&deg;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Ion Range Sliders -->

                <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
                <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Dropzone</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <h2 class="content-heading border-bottom mb-4 pb-2">Asynchronous File Uploads</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    Drag and drop sections for your file uploads
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <!-- DropzoneJS Container -->
                                <form class="dropzone" action="be_forms_plugins.html"></form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Dropzone -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                            href="https://pixelcave.com" target="_blank">pixelcave</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://pixelcave.com/products/oneui" target="_blank">OneUI
                            5.9</a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->


    <script src="{{ asset('admin/js/oneui.app.min.js') }}"></script>

    <!-- jQuery (required for BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script src="{{ asset('admin/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/js/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/dropzone/min/dropzone.min.js') }}"></script>

    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>
        One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs',
            'jq-rangeslider'
        ]);
    </script>
</body>

</html>