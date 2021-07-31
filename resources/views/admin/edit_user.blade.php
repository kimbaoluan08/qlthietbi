@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa thông tin người dùng
            </header>
            @foreach ($user as $key => $nguoidung)
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/capnhat-nguoidung/'.$nguoidung-> id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mã cán bộ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="macb" value="{{ $nguoidung -> macb }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên cán bộ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tencb" value="{{ $nguoidung -> tencb }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Đơn vị trực thuộc</label>
                            <select class="form-control input-sm m-bot15" name="dv">
                            @foreach ($dv as $key1 => $dv)
                            @if ($nguoidung-> madv == $dv -> madv)
                            <option selected value="{{ $nguoidung-> madv }}">{{ $dv->tendv }}</option>
                            @else
                            <option value="{{$dv-> madv}}">{{ $dv -> tendv }} </option>
                            @endif
                            @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info" name="add_brand_product"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cập nhật</button>
                    </form>
                </div>
            </div>
            @endforeach
        </section>
    </div>
</div>
@endsection
