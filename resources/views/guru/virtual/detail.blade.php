@extends('layout.app')
@section('title',$title)
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
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
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function (){
            console.log("Duar")
            $('table').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'pdf'
                ]
            } );
        })
    </script>
@endsection
