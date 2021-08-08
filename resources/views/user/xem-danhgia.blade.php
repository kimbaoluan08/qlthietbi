@extends('nguoidung')
@section('content_nguoidung')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Đánh giá dịch vụ</h2>
    <form action="{{ URL::to('/luu-danhgia') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Mức độ hài lòng:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" onclick="onlyOne(this)" name="check">
                <label class="form-check-label" for="inlineCheckbox1">Rất tốt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" onclick="onlyOne(this)" name="check">
                <label class="form-check-label" for="inlineCheckbox2">Tốt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="3" onclick="onlyOne(this)" name="check">
                <label class="form-check-label" for="inlineCheckbox1">Tạm được</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" onclick="onlyOne(this)" name="check">
                <label class="form-check-label" for="inlineCheckbox2">Không hài lòng</label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nội dung: <span style="color: red;">*</span></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidung" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Báo cáo</button>
    </form>
    <script>
           function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
    }
    </script>
</div>
<br>
@endsection
