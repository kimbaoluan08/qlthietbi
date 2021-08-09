@extends('nguoidung')
@section('content_nguoidung')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Phản hồi khách hàng</h2>
    <form action="{{ URL::to('/luu-traloi/'. $mayc) }}" method="post">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nội dung phản hồi <span style="color: red;">*</span></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="phanhoi" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Xác nhận</button>
    </form>

</div>
<br>
@endsection
