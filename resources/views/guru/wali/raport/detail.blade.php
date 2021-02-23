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
                                <th>NIS</th>
                                <th>Nama Lengkap</th>
                                <th>Mata Pelajaran</th>
                                <th>Guru Pengampu</th>
                                <th>Nilai</th>
                                <th>Keterangan</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($report->report_lessons as $k => $v)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$v->siswa_id}}</td>
                                    <td>{{\App\Models\Revisi\Siswa::where(["nis"=>$v->siswa_id])->first()->nama}}</td>
                                    <td>{{$v->matpel->nama}}</td>
                                    <td>{{$v->matpel->guru->nama}}</td>
                                    @if($v->point === null)
                                        <td>Sedang Proses</td>
                                    @else
                                        <td>{{$v->point}} ({{$v->grade}})</td>
                                    @endif
                                    <td>{{$v->keterangan}}</td>
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
