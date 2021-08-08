@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Phân quyền người dùng
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <?php $i = 0; ?>
                        <th style="width:50px;">STT</th>
                        <th>Tên cán bộ</th>
                        <th>Người dùng</th>
                        <th>Cán bộ sửa chữa</th>
                        <th>Quản trị viên</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quyen as $key => $q )
                    <tr>
                        <td><?php $i = $i + 1;
                            echo $i; ?></td>
                        <td>{{ $q -> tencb }}</td>
                        <form action="{{ URL::to('/sua-quyencb/'. $q->id) }}" method="post">
                        @csrf
                            <td>
                                <div class="form-group form-check" style="padding-left: 30px;">
                                    @if ($q->maquyen == 2)
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="onlyOne(this)" name="check0" value="1" checked>
                                    @else
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="onlyOne(this)" name="check0" value="1">
                                    @endif

                                </div>
                            </td>
                            <td>
                                <div class="form-group form-check" style="padding-left: 30px;">
                                    @if ($q->maquyen == 3)
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="onlyOne(this)" name="check1" value="1" checked>
                                    @else
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="onlyOne(this)" name="check1" value="1">
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-group form-check" style="padding-left: 30px;">
                                    @if ($q->maquyen == 1)
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check2" value="1" checked>
                                    @else
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check2" value="1">
                                    @endif
                                </div>
                            </td>
                            <td><button type="submit" class="btn btn-primary btn-sm">Cấp quyền</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection