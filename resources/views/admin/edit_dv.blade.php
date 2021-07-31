@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa đơn vị
            </header>
            <?php
            // $mess = Session()->get('message');
            // if($mess) {
            //     echo '<span style="color: red; margin-left: 5px;">'. $mess .'</span>';
            //     Session()->put('message', null);
            // }
            ?>
            @foreach ($dv as $key => $donvi)
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/capnhat-dv/'.$donvi-> madv)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên đơn vị</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tendonvi" value="{{ $donvi -> tendv }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Đơn vị cha</label>
                            <select class="form-control input-sm m-bot15" name="dvcha">
                                @foreach ($dv as $key1 => $dv)
                                    @if ($dv -> madvcha == NULL)
                                    <option selected value="">Không có</option>
                                    @else
                                    @foreach ($dvcha as $key2 => $dvcha )
                                        @if ($dv-> madvcha == $dvcha -> madv)
                                        <option selected value="{{$dv-> madvcha}}">{{ $dvcha -> tendv }} </option>
                                        @else
                                        <option value="{{$dvcha-> madv}}">{{ $dvcha -> tendv }} </option>
                                        @endif
                                    @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info" name="add_brand_product"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cập nhật đơn vị</button>
                    </form>
                </div>
            </div>
            @endforeach
        </section>
    </div>
</div>
@endsection
