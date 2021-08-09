@extends('nguoidung')
@section('content_nguoidung')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Thông báo</h2>
    @foreach ($ph as $key => $phanhoi)
    <div class="alert alert-success" role="alert">
        <h2 class="title text-center">Trả lời từ cán bộ</h2>
        <h4 class="alert-heading">{{ $phanhoi->ngayph }}</h4>
        <p>{{ $phanhoi->noidung }}</p>
        <hr>
    </div>
    @endforeach
</div>
<br>
@endsection
