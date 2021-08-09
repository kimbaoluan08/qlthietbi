@extends('canbo')
@section('content_canbo')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Thêm linh kiện</h2>
    <form action="{{ URL::to('/them-linhkien/'. $mahd) }}" method="post">
    @csrf
    <div class="form-group">
            <label for="exampleFormControlSelect1">Tên linh kiên <span style="color: red;">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="linhkien" required>
                <option disabled="disabled" selected="selected">Chọn linh kiên</option>
                @foreach ($lk as $key => $linhkien )
                <option value="{{ $linhkien->malinhkien }}">{{ $linhkien->tenlinhkien }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giá <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="gia" placeholder="Vui lòng nhập giá">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Số lượng <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="soluong" placeholder="Vui lòng nhập số lượng">
        </div>
        <button type="submit" class="btn btn-primary">Thêm linh kiện</button>
    </form>

</div>
<br>
@endsection
