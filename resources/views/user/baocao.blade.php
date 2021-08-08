@extends('nguoidung')
@section('content_nguoidung')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Nhập thông tin sự cố</h2>
    <form action="{{ URL::to('/luu-baocao') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Đơn vị</label>
            <input class="form-control" type="text" value="{{ $dv->tendv }}" name="tendv" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Loại thiết bị <span style="color: red;">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="loai" required>
                <option disabled="disabled" selected="selected">-</option>
                @foreach ($tb as $key => $loai )
                <option value="{{ $loai->maloai }}">{{ $loai->tenloai }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nhà sản xuất</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nsx" placeholder="Vui lòng nhập nếu bạn biết">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tình trạng thiết bị <span style="color: red;">*</span></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tinhtrang" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Báo cáo</button>
    </form>

</div>
<br>
@endsection
