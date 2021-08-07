@extends('nguoidung')
@section('content_nguoidung')
    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">Báo cáo sự cố</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('public/frontend/nguoidung/images/home/1.jpg') }}" alt="" />
                                    <h2>Máy tính</h2>
                                    <p>Sự cố về các loại máy tính</p>
                                    <a href="{{ URL::to('/baocao') }}" class="btn btn-default add-to-cart">Báo cáo</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('public/frontend/nguoidung/images/home/2.jpg') }}" alt="" />
                                    <h2>Máy in</h2>
                                    <p>Sự cố về các loại máy in</p>
                                    <a href="{{ URL::to('/baocao') }}" class="btn btn-default add-to-cart">Báo cáo</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('public/frontend/nguoidung/images/home/3.jpg') }}" alt="" />
                                    <h2>Thiết bị khác</h2>
                                    <p>Các thiết bị khác</p>
                                    <a href="{{ URL::to('/baocao') }}" class="btn btn-default add-to-cart">Báo cáo</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!--/recommended_items-->
@endsection
