<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Admin/images') }}/favicon.png">
    <link rel="stylesheet" href="{{ asset('Admin/vendor') }}/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('Admin/vendor') }}/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{ asset('Admin/vendor') }}/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{ asset('Admin/css') }}/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('Admin/images') }}/logo.png" alt="">
                <img class="logo-compact" src="{{ asset('Admin/images') }}/logo-text.png" alt="">
                <img class="brand-title" src="{{ asset('Admin/images') }}/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                        unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first text-light">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Add
                                    Category</a></li>
                            <li><a href="./index2.html">Dashboard 2</a></li>
                        </ul>
                    </li>

            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        {{-- ------------------------------------------------------------------ --}}


        {{-- main component start --}}
        @yield('Admin-contain')
        {{-- main component end --}}


        {{-- ------------------------------------------------------------------ --}}



        {{------------------------------------------------- Start modal------------------------------------------------------ --}}
        <div class="modal fade shadow" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form m-auto border p-2" action="{{ route('dashboard') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name"> Name-En</label>
                                <input to='name' placeholder="category name in English" class="form-control" type="text" name="name-an" />
                            </div>
                            <div class="form-group">
                                <label for="name"> Name-Ar</label>
                                <input to='name' class="form-control" placeholder="category name in Arabic" type="text" name="name-ar" />
                            </div>

                            <div class="form-group">
                                <label for="desc">category Description En</label>
                                <input to='desc' class="form-control" type="text" name="desc-en"  placeholder="category description in English"/>
                            </div>

                            <div class="form-group">
                                <label for="desc">category Description Ar</label>
                                <input to='desc' class="form-control" type="text" name="desc-ar"  placeholder="category description in Arabic"/>
                            </div>

                            <div class="form-group">
                                <label for="img"> category image</label>
                                <input to='img' class="form-control" type="file" name="categ-img" />
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add Category</button>
                    </div>
                </div>
            </div>
        </div>
        {{------------------------------------------------- End modal -------------------------------------------------------- --}}

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright text-secondary">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Abrar </a> 2022</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Abrar Muthana</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>

    <!--Scripts-->
    <!-- Required vendors -->
    <script src="{{ asset('Admin/vendor') }}/global/global.min.js"></script>
    <script src=" {{ asset('Admin/js') }}/quixnav-init.js"></script>
    <script src="{{ asset('Admin/js') }}/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="{{ asset('Admin/vendor') }}/raphael/raphael.min.js"></script>
    <script src="{{ asset('Admin/vendor') }}/morris/morris.min.js"></script>


    <script src="{{ asset('Admin/vendor') }}/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('Admin/vendor') }}/chart.js/Chart.bundle.min.js"></script>

    <script src="{{ asset('Admin/vendor') }}/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('Admin/vendor') }}/flot/jquery.flot.js"></script>
    <script src="{{ asset('Admin/vendor') }}/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('Admin/vendor') }}/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="{{ asset('Admin/vendor') }}/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{ asset('Admin/vendor') }}/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{ asset('Admin/vendor') }}/jquery.counterup/jquery.counterup.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <script src="{{ asset('Admin/js') }}/dashboard/dashboard-1.js"></script>

</body>

</html>
