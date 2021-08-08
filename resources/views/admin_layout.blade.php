<!DOCTYPE html>

<head>
    <title>Trang quản trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css" />
    <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/backend/js/morris.js')}}"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    ADMIN PAGE
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username" style="padding-left: 5px;">Luân Kim
                                <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                            <li><a href="#"><i class=" fa fa-cog"></i>Cài đặt</a></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i>Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li class="sub-menu">
                            <a href="{{ URL::to('/dashboard') }}">
                                <i class="fa fa-bar-chart"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-list"></i>
                                <span>Quản lý đơn vị</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ URL::to('/them-dv') }}"><i class="fa fa-plus" aria-hidden="true"></i> Thêm đơn vị</a></li>
                                <li><a href="{{ URL::to('/quanly-dv') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Danh sách đơn vị</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-user"></i>
                                <span>Quản lý người dùng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ URL::to('/qlnguoidung') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Danh sách cán bộ</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="{{URL::to('/phanquyen')}}">
                                <i class="fa fa-book"></i>
                                <span>Phân quyền người dùng</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-question-circle"></i>
                                <span>Quản lý yêu cầu</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-star"></i>
                                <span>Quản lý đánh giá</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-comment"></i>
                                <span>Quản lý phản hồi</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- //market-->
                @yield('admin_content')
            </section>
            <!--main content end-->
        </section>
        <script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{asset('public/backend/js/scripts.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>

        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="{{('public/backend/js/jquery.scrollTo.js')}}"></script>
        <!-- morris JavaScript -->
        <script>
            $(document).ready(function() {
                //BOX BUTTON SHOW AND CLOSE
                jQuery('.small-graph-box').hover(function() {
                    jQuery(this).find('.box-button').fadeIn('fast');
                }, function() {
                    jQuery(this).find('.box-button').fadeOut('fast');
                });
                jQuery('.small-graph-box .box-close').click(function() {
                    jQuery(this).closest('.small-graph-box').fadeOut(200);
                    return false;
                });
            });
        </script>

        <script>
            $('.comment_duyet_btn').click(function() {
                var comment_status = $(this).data('comment_status');
                var comment_id = $(this).data('comment_id');
                var comment_product_id = $(this).attr('id');
                if (comment_status == 1) {
                    var alert = 'Thay đổi duyệt thành công';
                } else {
                    var alert = 'Thay đổi duyệt không thành công';
                }
                $.ajax({
                    url: "{{ url('/allow-comment') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                    },
                    data: {
                        comment_status: comment_status,
                        comment_id: comment_id,
                        comment_product_id: comment_product_id
                    },
                    success: function(data) {
                        $('#notify_comment').html('<span class="text text-alert">' + alert + '</span>');
                        location.reload();
                    }
                })
            });

            $('.btn-reply-comment').click(function() {

                var comment_id = $(this).data('comment_id');
                var comment = $('.reply_comment_' + comment_id).val();
                var comment_product_id = $(this).data('product_id');
                $.ajax({
                    url: "{{ url('/reply-comment') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                    },
                    data: {
                        comment_id: comment_id,
                        comment: comment,
                        comment_product_id: comment_product_id
                    },
                    success: function(data) {
                        $('.reply_comment_' + comment_id).val();
                        $('#notify_comment').html('<span class="text text-alert">Trả lời bình luận thành công</span>');
                        location.reload();
                    }
                })
            });
        </script>
        <!--  -->
</body>

</html>
