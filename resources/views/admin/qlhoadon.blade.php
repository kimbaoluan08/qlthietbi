@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Hoá đơn
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:10px">STT</th>
                        <th>Tên đơn vị</th>
                        <th>Nội dung</th>
                        <th>Tổng tiền</th>
                        <th>Ngày lập</th>
                        <th>Thao tác</th>
                        <?php $i = 0 ?>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hd as $key => $hoadon )
                    <tr>
                        <td><span class="text-ellipsis"><?php $i = $i + 1;
                                                        echo $i; ?></span></td>
                        <td><span class="text-ellipsis"></span>{{ $hoadon->tendv }}</td>
                        <td><span class="text-ellipsis"></span>{{ $hoadon->tinhtrang }}</td>
                        <td>
                        @if ($hoadon->tong == NULL)
                        <span style="color: blue;" class="text-ellipsis">Đang tính hoá đơn</span>
                        @else
                        <span  style="color: green;" class="text-ellipsis">{{number_format($hoadon-> tong). ' ' . 'đ'}}</span>
                        @endif
                        </td>
                        <td><span class="text-ellipsis"></span>{{ $hoadon->ngaylap }}</td>
                        <td>
                            <a href="{{ URL::to('/xoa-/' ) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
