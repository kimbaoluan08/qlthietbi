@extends('canbo')
@section('content_canbo')
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
      <th scope="col">Phản hồi</th>
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
      <td class=text-center><a href="{{ URL::to('/traloi/'. $yeucau->mayc) }}"><button type="button" class="btn btn-success btn-sm">Phản hồi</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
<br>
@endsection
