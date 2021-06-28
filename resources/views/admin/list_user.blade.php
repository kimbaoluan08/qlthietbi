@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách cán bộ
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">-</option>
          <option value="1">Xóa lựa chọn</option>
        </select>
        <button class="btn btn-sm btn-default">Áp dụng</button>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
          </span>
        </div>
      </div>
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
            <th>Thao tác</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($all_user as $key => $user )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{  $user->macb }}</td>
            <td><span class="text-ellipsis">{{  $user->tencb }}</span></td>
            <td>{{  $user->tendv }}</td>
            <td><span class="text-ellipsis">{{  $user->ngaythem }}</span></td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a> <br>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
