@extends('admin.home_leader_dn')
@section('css')
<!--link css only page here-->

@endsection




@section('main')
<div>
    <div>
    <table class="table display" id="tabledata">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên công việc</th>
        <th>Mức độ ưu tiên</th>
        <th>Người yêu cầu</th>
        <th>Người thực hiện</th>
        <th>Ngày hết hạn</th>
        <th>Trạng thái</th>
        <th>Chi tiết</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($indi_data as $key => $data)
          <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{str_limit($data->subject,20)}}</td>
              <td>{{$data->priority}}</td>
              <td>{{$data->employee_cre}}</td>
              <td>{{$data->employee_assi}}</td>
              <td>{{ date('d/m/Y',strtotime($data->deadline)) }} </td>
              <td>{{$data->status}}</td>
              <td class="center"><a href="{{ route('edit_leader_dn', $data->id)  }}"><span class="fa fa-pencil-square"></span></a></td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

</div>

@endsection


@section('js')
<script src="{{ URL::asset('public/dist/js/sb-admin-2.js') }}"></script>


<script type="text/javascript">
	$(document).ready(function() {
    $('#tabledata').DataTable( {
        paging: true,   
    } );
} );
</script>
@endsection