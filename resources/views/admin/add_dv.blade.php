@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm đơn vị
            </header>
            <?php
            // $mess = Session()->get('message');
            // if($mess) {
            //     echo '<span style="color: red; margin-left: 5px;">'. $mess .'</span>';
            //     Session()->put('message', null);
            // }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/luu-dv')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên đơn vị</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tendonvi">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                            <textarea class="form-control" style="resize: none;" rows="5"; id="exampleInputPassword1" name="chitiet"></textarea>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputFile">Đơn vị cha</label>
                            <select class="form-control input-sm m-bot15" name="dvcha">
                                <option value="">Không có</option>
                                @foreach ($dv as $key => $donvi )
                                <option value="{{$donvi-> madv}}">{{$donvi -> tendv}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info" name="add_brand_product"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Thêm Đơn Vị</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
