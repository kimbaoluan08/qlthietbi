@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách đơn vị
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <?php $i = 0; ?>
                        <th style="width:200px;">STT</th>
                        <th>Tên đơn vị</th>
                        <th>Thao tác</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donvi as $key => $dv )
                    <tr>
                        <td><?php $i = $i + 1; echo $i; ?></td>
                        <td>{{ $dv-> tendv }}</td>
                        <td>
                            <a href="{{ URL::to('/sua-dv/'.$dv-> madv) }}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a> <br>
                            <a href="{{ URL::to('/xoa-dv/'.$dv-> madv) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
