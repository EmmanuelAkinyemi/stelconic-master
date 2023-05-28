<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from omah.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 12:43:12 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="webstact ict" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Stelconic :  Unlock real estate potential with Stelconic" />
	<meta property="og:title" content="Stelconic :  Unlock real estate potential with Stelconic" />
	<meta property="og:description" content="Stelconic :  Unlock real estate potential with Stelconic" />
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    <title>Stelconic - Unlock real estate potential with Stelconic</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("admin/images/favicon.png") }}">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<!-- Vectormap -->
    <link href="{{ asset("admin/vendor/jqvmap/css/jqvmap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/css/style.css") }}" rel="stylesheet">
	<link href="{{ asset("admin/../../cdn.lineicons.com/2.0/LineIcons.css") }}" rel="stylesheet">
	<link href="{{ asset("admin/vendor/owl-carousel/owl.carousel.css") }}" rel="stylesheet">

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
            <a href="/" class="brand-logo">
                <img class="logo-abbr" src="{{ asset("admin/images/logo.png") }}" alt="">
                <img class="logo-compact" src="{{ asset("admin/images/logo-text.png") }}" alt="">
                <img class="brand-title" src="{{ asset("admin/images/logo-text.png") }}" alt="">
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
                            <div class="dashboard_bar">
                                <div class="search_bar dropdown">
									<div class="dropdown-menu p-0 m-0">
										<form>
											<div class="input-group">
												<input class="form-control" type="search" placeholder="Search Here" aria-label="Search">
												<span class="search_icon p-3 c-pointer" data-bs-toggle="dropdown">
													<svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
														<path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#3B4CB8"/>
													</svg>
												</span>
											</div>
										</form>
									</div>
								</div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
									<div class="header-info">
										<span class="text-black text-capitalize">{{ auth()->user()->name }}</span>
										<p class="fs-12 mb-0">{{ auth()->user()->usertype }}</p>
									</div>
                                    <img src="{{ asset("admin/images/avatar.jpg") }}" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
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
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-dashboard-1"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/dashboard">Dashboard</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-app"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                                <ul aria-expanded="false">
									<li><a href="viewProperties">Porperties</a></li>
									<li><a href="viewArticles">Articles</a></li>
									<li><a href="vewUsers">Users</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Stelconic &amp; 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset("admin/vendor/global/global.min.js") }}"></script>
	<script src="{{ asset("admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") }}"></script>
	<script src="{{ asset("admin/vendor/chart.js/Chart.bundle.min.js") }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
	<script src="{{ asset("admin/js/deznav-init.js") }}"></script>
	<script src="{{ asset("admin/vendor/owl-carousel/owl.carousel.js") }}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ asset("admin/vendor/peity/jquery.peity.min.js") }}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset("admin/js/dashboard/dashboard-1.js") }}"></script>

	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:0,
				nav:true,
				dots: false,
				navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
				responsive:{
					0:{
						items:1
					},

					480:{
						items:1
					},

					767:{
						items:1
					},
					1000:{
						items:1
					}
				}
			})
			/*Custom Navigation work*/
			jQuery('#next-slide').on('click', function(){
			   $('.testimonial-one').trigger('next.owl.carousel');
			});

			jQuery('#prev-slide').on('click', function(){
			   $('.testimonial-one').trigger('prev.owl.carousel');
			});
			/*Custom Navigation work*/
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
	</script>

</body>

<!-- Mirrored from omah.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 12:44:25 GMT -->
</html>
