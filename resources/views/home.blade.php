<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Sửa chữa thiết bị chuyên nghiệp</title>
	<meta charset="UTF-8">
	<meta name="description" content="Quản lý thiết bị">
	<meta name="keywords" content="qltb ,html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<!-- <link href="img/favicon.ico" rel="shortcut icon"/> -->

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('public/frontend/css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{ asset('public/frontend/css/slicknav.min.css') }}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="{{ asset('public/frontend/img/logo.png') }}" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.html" class="active">Home</a></li>
				<li><a href="about-us.html">Giới thiệu</a></li>
				<li><a href="#">Tin mới</a>
					<ul class="sub-menu">
						<li><a href="about-us.html">Nhân sự</a></li>
						<li><a href="loans.html">Tin tức</a></li>
						<li><a href="elements.html">Trang cá nhân</a></li>
					</ul>
				</li>
				<li><a href="news.html">Phản hồi</a></li>
				<li><a href="contact.html">Liên hệ</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Gọi ngay! </a>
				<div class="hr-btn hr-btn-2">+034 7444 190</div>
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">
						<h2>Bạn đang gặp sự cố về các thiết bị?</h2>
						<p></p>
						<a href="#" class="site-btn sb-dark">Đăng kí ngay</a>
					</div>
				</div>
				<div class="col-lg-6">
					<form class="hero-form">
						<input type="text" placeholder="Tài khoản">
						<input type="password" placeholder="Mật khẩu">
						<p style="font-size: 18px"><a href="">Bạn chưa có tài khoản?</a></p>
						<button class="site-btn">Đăng nhập</button>
					</form>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{ asset('public/frontend/img/hero-slider/1.jpg') }}"></div>
			<div class="hs-item set-bg" data-setbg="{{ asset('public/frontend/img/hero-slider/2.jpg') }}"></div>
			<div class="hs-item set-bg" data-setbg="{{ asset('public/frontend/img/hero-slider/3.jpg') }}"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Tại sao lại chọn chúng tôi?</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-012-24-hours"></i>
						</div>
						<div class="ib-text">
							<h5>Tiết kiệm thời gian</h5>
							<p>Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-036-customer-service"></i>
						</div>
						<div class="ib-text">
							<h5>Tư vấn nhiệt tình</h5>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep-tos himenaeos. Suspendisse potenti. Ut gravida mattis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-039-info"></i>
						</div>
						<div class="ib-text">
							<h5>Giải quyết sự cố nhanh</h5>
							<p>Conubia nostra, per inceptos himenae os. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-3">
				<a href="#" class="site-btn sb-big">Đăng kí ngay</a>
			</div>
		</div>
	</section>
	<!-- Why Section end -->


	<!-- CTA Section end -->
	<section class="cta-section set-bg" data-setbg="{{ asset('public/frontend/img/cta-bg.jpg') }}">
		<div class="container">
			<h2>Bạn muốn biết thêm về chúng tôi?</h2>
			<h5>Chúng tôi sẽ giải quyết tất cả sự cố về thiết bị của bạn</h5>
			<a href="#" class="site-btn sb-dark sb-big">Tìm hiểu thêm</a>
		</div>
	</section>
	<!-- CTA Section end -->

	<!-- Help Section -->
	<section class="help-section spad">
		<div class="container">
			<div class="text-center text-white mb-5 pb-4">
				<h2>Chúng tôi sẽ xử lý các sự cố</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec.</p>
				</div>
				<div class="col-md-6">
					<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="help-list">
						<li>Lỗi nguồn</li>
						<li>Không nhận thiết bị</li>
						<li>Lỗi ánh sáng</li>
						<li>Lỗi cơ khí</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Bảo dưỡng laptop</li>
						<li>Dịch vụ thay thế linh kiện laptop</li>
						<li>Nâng cấp phần cứng</li>
						<li>Nhu cầu lắp đặt máy tính</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Sự cố máy in</li>
						<li>Sự cố mạng</li>
						<li>Sự cố máy Fax</li>
						<li>...</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Help Section end -->


	<!-- Info Section -->
	<section class="info-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="img/info-img.jpg" alt="">
				</div>
				<div class="col-lg-7">
					<div class="info-text">
						<h2>Chúng tôi sẽ giúp ích đến bạn</h2>
						<h5>Thứ 2 đến Thứ 5 (8am to 8pm), và Thứ 6 (8am to 5pm).</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
						<ul>
							<li>+34 56873 2246</li>
							<li>philaden098@gmail.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Info Section end -->


	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="index.html" class="footer-logo">
				<img src="img/logo.png" alt="">
			</a>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>What we do</h2>
						<ul>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Car loans</a></li>
							<li><a href="#">Debt consolidation loans</a></li>
							<li><a href="#">Home improvement loans</a></li>
							<li><a href="#"> Wedding loans</a></li>
							<li><a href="#">Innovative Finance ISA</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>About us</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Our story</a></li>
							<li><a href="#">Meet the board</a></li>
							<li><a href="#">Meet the leadership team</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Legal</h2>
						<ul>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Loans2go principles</a></li>
							<li><a href="#">Website terms</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Conflicts policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Site Info</h2>
						<ul>
							<li><a href="#">Support</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
	</footer>
	<!-- Footer Section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('public/frontend/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/main.js') }}"></script>

	</body>
</html>
