@extends('canbo')
@section('content_canbo')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Tiến độ thực hiện</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Bộ môn</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ngày trả lời</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
            @foreach ($yc1 as $key => $yeucau )
            <tr>
                <th scope="row"><?php $i = $i + 1;
                                echo $i; ?></th>
                <td>{{ $yeucau->tendv }}</td>
                <td>{{ $yeucau->tinhtrang }}</td>
                <td>{{ $yeucau->ngayph }}</td>
                <td class=text-center>
                    @if ($yeucau->tiendo == 2 || $yeucau->tiendo == 3)
                    <span style="color: green;">Đã lên hoá đơn</span>
                    @else
                    <a href="{{ URL::to('/tienhanh/'. $yeucau->matb) }}"><button type="button" class="btn btn-success btn-sm">Hoá đơn</button></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<br>
@endsection
