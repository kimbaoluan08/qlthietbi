@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm cán bộ
            </header>
            <?php
            $mess = Session()->get('message');
            if($mess) {
                echo '<span style="color: red; margin-left: 5px;">'. $mess .'</span>';
                Session()->put('message', null);
            }
        ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-user')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mã cán bộ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="ten_hangsx">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên cán bộ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="ten_hangsx">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" name="ten_hangsx">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                            <textarea class="form-control" style="resize: none;" rows="5"; id="exampleInputPassword1" name="chitiet"></textarea>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputFile">Đơn vị</label>
                            <select class="form-control input-sm m-bot15" name="tinhtrang">
                                <option value="1"></option>
                                <option value="0"></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Trạng thái</label>
                            <select class="form-control input-sm m-bot15" name="tinhtrang">
                                <option value="1">Kích hoạt</option>
                                <option value="0">Khóa</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info" name="add_brand_product"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Thêm Cán bộ</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
    </div>
    @endsection
