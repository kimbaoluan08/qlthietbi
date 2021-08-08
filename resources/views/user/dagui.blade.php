@extends('nguoidung')
@section('content_nguoidung')
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Yêu cầu đã gửi</h2>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Bộ môn</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Ngày gửi</th>
      <th scope="col">Tình trạng</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 0 ?>
    @foreach ($yc as $key => $yeucau )
    <tr>
      <th scope="row"><?php $i = $i+1; echo $i; ?></th>
      <td>{{ $yeucau->tendv }}</td>
      <td>{{ $yeucau->tinhtrang }}</td>
      <td>{{ $yeucau->ngayyc }}</td>
      @if ( $yeucau->hientrang == 0 )
      <td style="color: red;">Chưa xử lý</td>
      @elseif ($yeucau->hientrang == 1)
      <td style="color: blue;">Đang xử lý</td>
      @else
      <td style="color: green;">Hoàn thành</td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>

</div>
<br>
@endsection
