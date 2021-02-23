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
                    <div class="form-group">
                        <a href="{{route("wali.raport.add")}}" class="btn btn-success btn-flat">
                            <li class="fa fa-plus"></li>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>TA</th>
                                <th>Semester</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($report as $k => $v)
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$v->rombel->nama}}</td>
                                        <td>{{\App\Casts\RombelSemester::lang($v->rombel->semester)}}</td>
                                        <td>{{\App\Casts\RaportStatus::lang($v->status)}}</td>
                                        <td>
                                            <a href="{{route("wali.raport.detail",$v->id)}}" class="btn btn-primary m-1">
                                                <li class="fa fa-eye"></li> Detail
                                            </a>
                                            @if($v->status === \App\Casts\RaportStatus::DIBUAT)
                                            <a href="{{route("wali.raport.update",[$v->id,"status"=>\App\Casts\RaportStatus::DIPROSES])}}" class="btn btn-warning m-1">
                                                <li class="fa fa-hourglass-half"></li> Proses
                                            </a>
                                            @elseif($v->status === \App\Casts\RaportStatus::DIPROSES)
                                            <a href="{{route("wali.raport.update",[$v->id,"status"=>\App\Casts\RaportStatus::SELESAI])}}" class="btn btn-primary m-1">
                                                <li class="fa fa-check"></li> Selesai
                                            </a>
                                            @endif
                                        </td>
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
