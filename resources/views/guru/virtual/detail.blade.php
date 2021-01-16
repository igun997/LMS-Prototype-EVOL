@extends('layout.app')
@section('title',$title)
@section('css')

@endsection
@section('url',session()->get("url"))
@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0">{{$title}}</h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>PIN Hadir</th>
                                    <th>PIN Sakit</th>
                                    <th>PIN Ijin</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data->virtual_class_attendances as $key => $row)
                                    <tr>
                                        <td>{{($key+1)}}</td>
                                        <td>{{\App\Models\Revisi\Siswa::find($row->siswa_id)->nama}}</td>
                                        <td>{{$row->present_pin}}</td>
                                        <td>{{$row->sick_pin}}</td>
                                        <td>{{$row->permission_pin}}</td>
                                        <td>{{\App\Casts\VirtualAttendance::lang($row->status)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function (){
            $("table").DataTable();
        })
    </script>
@endsection
