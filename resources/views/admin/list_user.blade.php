@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách cán bộ
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <!-- <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label> -->
                        </th>
                        <th>Mã cán bộ</th>
                        <th>Tên cán bộ</th>
                        <th>Đơn vị</th>
                        <th>Ngày thêm</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_user as $key => $user )
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{ $user->macb }}</td>
                        <td><span class="text-ellipsis">{{ $user->tencb }}</span></td>
                        <td>{{ $user->tendv }}</td>
                        <td><span class="text-ellipsis">{{ $user->ngaythem }}</span></td>
                        <td><span class="text-ellipsis">
                            @if ($user->ngaysua == 0)
                                Chưa thay đổi
                            @else
                                {{ $user->ngaysua }}
                            @endif
                        </span></td>
                        <td>
                            <a href="{{ URL::to('/sua-nguoidung/'.$user->id  ) }}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a> <br>
                            <a href="{{ URL::to('/xoa-nguoidung/'.$user->id  ) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
