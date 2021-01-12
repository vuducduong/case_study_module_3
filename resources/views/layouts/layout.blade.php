<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/streamitnew/dashboard/html/theme/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:03:49 GMT -->
<head>
{{--    <base href="{{asset('/layouts/ ')}}">--}}

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Streamit - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://iqonic.design/themes/streamitnew/dashboard/html/assets/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('back-end/css/bootstrap.min.css')}}">
    <!--datatable CSS -->
    <link rel="stylesheet" href="{{asset('back-end/css/dataTables.bootstrap4.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('back-end/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('back-end/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('back-end/css/responsive.css')}}">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar-->
    <div class="iq-sidebar">
        <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="{{route('movie-fontEnd.index')}}" class="header-logo">
                <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="">
                <div class="logo-title">
                    <span class="text-primary text-uppercase" >Trang Chủ </span>
                </div>
            </a>
            <div class="iq-menu-bt-sidebar">
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active active-menu"><a href="{{route('admin.menu')}}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Trang Chủ Admin</span></a></li>
                    <li><a href="{{route('movies.list')}}" class="iq-waves-effect"><i class="las la-star-half-alt"></i><span>Danh Sách Phim</span></a></li>
                    <li><a href="{{route('directors.list')}}" class="iq-waves-effect"><i class="las la-comments"></i><span>Danh Sách Đạo Diễn</span></a></li>
                    <li><a href="{{route('country.list')}}" class="iq-waves-effect"><i class="las la-user-friends"></i><span>Danh Sách Quốc Gia</span></a></li>
                    <li><a href="{{route('actors.list')}}" class="iq-waves-effect"><i class="las la-user-friends"></i><span>Danh Sách Diễn Viên</span></a></li>
                    <li><a href="{{route('category.list')}}" class="iq-waves-effect"><i class="las la-user-friends"></i><span>Danh Sách Thể Loại </span></a></li>
                    <li><a href="{{route('logout')}}" ><span>Log Out</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index-2.html" class="header-logo">
                            <img src="{{asset('back-end/images/logo.png')}}" class="img-fluid rounded-normal" alt="">
                            <div class="logo-title">
                                <span class="text-primary text-uppercase">Streamit</span>
                            </div>
                        </a>
                    </div>
                </div>


                @yield('title')






                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                <i class="ri-search-line"></i>
                            </a>
                            <form action="#" class="search-box p-0">
                                <input type="text" class="text search-input" placeholder="Type here to search...">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            </form>
                        </li>

                        <li class="line-height pt-3">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="{{asset('back-end/images/user/1.jpg')}}" class="img-fluid rounded-circle mr-3" alt="user">
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                            <span class="text-white font-size-12">Available</span>
                                        </div>
                                        <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-file-user-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">My Profile</h6>
                                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-profile-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Edit Profile</h6>
                                                    <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-account-box-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Account settings</h6>
                                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-lock-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Privacy Settings</h6>
                                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->


    @yield('ok')

    <div id="content-page" class="content-page">
        <div class="container-fluid">

                @yield('movie')



        </div>
    </div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Happy New year 2021 ^^ <a href="#">Streamit</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('back-end/js/jquery.min.js')}}"></script>
<script src="{{asset('back-end/js/popper.min.js')}}"></script>
<script src="{{asset('back-end/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back-end/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back-end/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset('back-end/js/jquery.appear.js')}}"></script>
<!-- Countdown JavaScript -->
<script src="{{asset('back-end/js/countdown.min.js')}}"></script>
<!-- Select2 JavaScript -->
<script src="{{asset('back-end/js/select2.min.js')}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset('back-end/js/waypoints.min.js')}}"></script>
<script src="{{asset('back-end/js/jquery.counterup.min.js')}}"></script>
<!-- Wow JavaScript -->
<script src="{{asset('back-end/js/wow.min.js')}}"></script>
<!-- Slick JavaScript -->
<script src="{{asset('back-end/js/slick.min.js')}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset('back-end/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset('back-end/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{asset('back-end/js/smooth-scrollbar.js')}}"></script>
<!-- apex Custom JavaScript -->
<script src="{{asset('back-end/js/apexcharts.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('back-end/js/chart-custom.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset('back-end/js/custom.js')}}"></script>
</body>

<!-- Mirrored from iqonic.design/themes/streamitnew/dashboard/html/theme/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:05:14 GMT -->
</html>
