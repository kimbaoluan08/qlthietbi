@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách yêu cầu
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:10px">STT</th>
                        <th>Tên đơn vị</th>
                        <th>Tình trạng</th>
                        <th>Ngày yêu cầu</th>
                        <th>Hiện trạng</th>
                        <th>Thao tác</th>
                        <?php $i = 0 ?>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($yc as $key => $yeucau )
                    <tr>
                        <td><span class="text-ellipsis"><?php $i = $i+1; echo $i; ?></span></td>
                        <td><span class="text-ellipsis">{{ $yeucau->tendv }}</span></td>
                        <td><span class="text-ellipsis">{{ $yeucau->tinhtrang }}</span></td>
                        <td><span class="text-ellipsis">{{ $yeucau->ngayyc }}</span></td>
                        <td>
                            @if ($yeucau->hientrang == 0)
                            <span style="color: red;" class="text-ellipsis">Chưa xử lý</span>
                            @elseif ($yeucau->hientrang == 1)
                            <span style="color: blue" class="text-ellipsis">Đang xử lý</span>
                            @else
                            <span  style="color: green;" class="text-ellipsis">Hoàn thành</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ URL::to('/sua-/'  ) }}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a> <br>
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
