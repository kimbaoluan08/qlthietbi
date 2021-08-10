@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Đánh giá từ người dùng
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:10px">STT</th>
                        <th>Tên người dùng</th>
                        <th>Nội dung</th>
                        <th>Mức độ hài lòng</th>
                        <th>Ngày đánh giá</th>
                        <th>Thao tác</th>
                        <?php $i = 0 ?>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dg as $key => $danhgia )
                    <tr>
                        <td><span class="text-ellipsis"><?php $i = $i + 1;
                                                        echo $i; ?></span></td>
                        <td><span class="text-ellipsis"></span>{{ $danhgia->tencb }}</td>
                        <td><span class="text-ellipsis"></span>{{ $danhgia->noidung }}</td>
                        <td>
                            @if ($danhgia->mucdo == 1)
                            <span style="color: green;" class="text-ellipsis">Rất tốt</span>
                            @elseif ($danhgia->mucdo == 2)
                            <span style="color: blue" class="text-ellipsis">Tốt</span>
                            @elseif ($danhgia->mucdo == 3)
                            <span style="color: black" class="text-ellipsis">Tạm được</span>
                            @else
                            <span  style="color: red;" class="text-ellipsis">Không hài lòng</span>
                            @endif
                        </td>
                        <td><span class="text-ellipsis"></span>{{ $danhgia->ngaydg }}</td>
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
