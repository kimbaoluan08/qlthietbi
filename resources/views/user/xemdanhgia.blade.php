@extends('nguoidung')
@section('content_nguoidung')
<style>
    @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
}

.mt-100 {
    margin-top: 5px
}

.mb-100 {
    margin-bottom: 100px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid transparent;
    border-radius: 0px
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px
}

.comment-widgets {
    position: relative;
    margin-bottom: 10px
}

.comment-widgets .comment-row {
    border-bottom: 1px solid transparent;
    padding: 14px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 10px 0
}

.p-2 {
    padding: 0.5rem !important
}

.comment-text {
    padding-left: 15px
}

.w-100 {
    width: 100% !important
}

.m-b-15 {
    margin-bottom: 15px
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.76563rem;
    line-height: 1.5;
    border-radius: 1px
}

.btn-cyan {
    color: #fff;
    background-color: #27a9e3;
    border-color: #27a9e3
}

.btn-cyan:hover {
    color: #fff;
    background-color: #1a93ca;
    border-color: #198bbe
}

.comment-widgets .comment-row:hover {
    background: rgba(0, 0, 0, 0.05)
}
</style>
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Đánh giá từ người dùng</h2>
    <div class="row d-flex justify-content-center mt-100 mb-100">
    <div class="col-lg-12">
        <div class="card">
            <div class="comment-widgets">
                <!-- Comment Row -->
                @foreach ($bl as $key => $binhluan )
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJwy5RvIu7q4ggwqwpIMWirfinieXxkh22X6zfi9t-jjtoCmlLm9wDPLpFqG5ytIRS_rQ&usqp=CAU" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h5 class="font-medium">{{ $binhluan-> tencb  }}</h5> <span class="m-b-15 d-block">{{ $binhluan-> noidung  }}</span>
                        <div class="comment-footer"> <span class="text-muted float-right">{{ $binhluan-> ngaydg  }}</span>
                    </div>
                </div> <!-- Comment Row -->
                @endforeach
            </div> <!-- Card -->
        </div>
    </div>
</div>
</div>
<br>
@endsection
