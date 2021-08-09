@extends('canbo')
@section('content_canbo')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Hoá đơn</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên phòng</th>
                <th scope="col">Ngày lập</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Thao tác</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
            @foreach ($hoadon as $key => $hd )
            <tr>
                <th scope="row"><?php $i = $i + 1;
                                echo $i; ?></th>
                <td>{{ $hd->tendv }}</td>
                <td>{{ $hd->ngaylap }}</td>
                <td>{{number_format($hd-> tong). ' ' . 'đ'}}</td>
                @if ($hd->tong == NULL)
                <td class=text-center>
                    <a href="{{ URL::to('/themlinhkien/'. $hd->mahd) }}"><button type="button" class="btn btn-success btn-sm">Thêm linh kiện</button></a>
                </td>
                <td class=text-center>
                    <a href="{{ URL::to('/xacnhan/'. $hd->mahd) }}"><button type="button" class="btn btn-success btn-sm">Xác nhận</button></a>
                </td>
                @else
                    <td></td>
                    <td><span style="color: green;">Đã hoàn thành</span></td>
                @endif

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>
@endsection
