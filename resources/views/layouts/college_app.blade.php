<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <title>Student Login Agent Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap Css -->
    <link href="/assetsCollege/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assetsCollege/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link id="app-style" rel="stylesheet" type="text/css" href="/assetsCollege/assets/css/app.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <link rel="stylesheet" href="/assetsCollege/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assetsCollege/assets/css/responsive.css">
    
    <link href="assetsStudent/css/select2.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark" id="main">

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two" style="left:20px;"></div>
                <div class="object" id="object_three" style="left:40px;"></div>
                <div class="object" id="object_four" style="left:60px;"></div>
                <div class="object" id="object_five" style="left:80px;"></div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- left menu -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <div class="slide-logo">
                    <!-- <img src=""> -->
                    <h5>Enrollhere</h5>
                </div>
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li><a href="/collegeDashboard"><i class="me-2 fa-solid fa-house-chimney-window"></i><span>Home</span></a></li>
                        <li><a href="/addCollege"><i class="me-2 fa-solid fa-building-columns"></i> <span>Add College</span></a></li>
                        <li><a href="/addProgram"><i class="me-2 fa-solid fa-list-check"></i> <span>Programs</span></a></li>
                         <li><a href="/requirement"><i class="me-2 fa-solid fa-list-check"></i> <span>Requirement</span></a></li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>


        <section class="main-content">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect d-none-custom" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar="init" style="max-height: 230px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <a href="javascript: void(0);" class="text-reset notification-item">
                                                            <div class="d-flex">
                                                                <div class="avatar-xs me-3">
                                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                                        <i class="bx bx-cart"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                                                    <div class="font-size-12 text-muted">
                                                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-reset notification-item">
                                                            <div class="d-flex">
                                                                <img src="/assetsCollege/assets/img/profile-icon.png" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                <div class="flex-grow-1">
                                                                    <h6 class="mb-1">James Lemire</h6>
                                                                    <div class="font-size-12 text-muted">
                                                                        <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-reset notification-item">
                                                            <div class="d-flex">
                                                                <div class="avatar-xs me-3">
                                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                                        <i class="bx bx-badge-check"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                                                    <div class="font-size-12 text-muted">
                                                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-reset notification-item">
                                                            <div class="d-flex">
                                                                <img src="/assetsCollege/assets/img/profile-icon.png" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                <div class="flex-grow-1">
                                                                    <h6 class="mb-1">Salena Layfield</h6>
                                                                    <div class="font-size-12 text-muted">
                                                                        <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown profile-login d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/assetsCollege/assets/img/profile-icon.png" alt="Header Avatar">

                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item user-name" href="javascript::">
                                    <span class=" font-size-14"><b> {{Auth::user()->name}}</b></span>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-user font-size-16 align-middle me-1"></i>
                                    <span key="t-profile">Profile</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                                    <span key="t-my-wallet">My Wallet</span>
                                </a>
                                <a class="dropdown-item d-block" href="#">
                                    <span class="badge bg-success float-end">11</span>
                                    <i class="bx bx-wrench font-size-16 align-middle me-1"></i>
                                    <span key="t-settings">Settings</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                                    <span key="t-lock-screen">Lock screen</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="bx bx-power-off font-size-16 align-middle me-1"></i>
                                    <span key="t-logout">Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            @yield('content')
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© Enrollhere 2022 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <!-- Jquery js -->
    <script src="/assetsCollege/assets/js/jquery.min.js"></script>
    <script src="/assetsCollege/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assetsCollege/assets/js/metisMenu.min.js"></script>

    <!-- Editor js -->
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

    <!-- App js -->
    <script src="/assetsCollege/assets/js/app.js"></script>

    <!-- Main js -->
    <script src="/assetsCollege/assets/js/main.js"></script>

    <script src="assetsStudent/js/select2.min.js"></script>

    <script src="assetsStudent/js/ecommerce-select2.init.js"></script>
    
    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.on('instanceReady', function(evt) {
            var editor = evt.editor;
            editor.on('change', function(e) {
                var contentSpace = editor.ui.space('contents');
                var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
                var ckeditorFrame = ckeditorFrameCollection[0];
                var innerDoc = ckeditorFrame.contentDocument;
                var innerDocTextAreaHeight = $(innerDoc.body).height();
                console.log(innerDocTextAreaHeight);
                if (CKEDITOR.instances.editor1.getData().length > 0) {
                    $('label[for="editor1"]').hide();
                } else {
                    $('label[for="editor1"]').show();
                }
            });
        });
    </script>
@yield('js')
</body>

</html>