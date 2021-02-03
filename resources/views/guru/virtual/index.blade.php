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
                        <a href="{{route("virtual.class.add")}}" class="btn btn-success btn-flat">
                            <li class="fa fa-plus"></li>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sesi</th>
                                    <th>Kelas</th>
                                    <th>Dimulai</th>
                                    <th>Berakhir</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($virtual as $k => $r)
                                    <tr>
                                        <td>{{($k+1)}}</td>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->kela->kela->nama}} - {{$r->kela->nama}}</td>
                                        <td>{{$r->start_date->format("d/m/Y H:i:s")}}</td>
                                        <td>{{$r->end_date->format("d/m/Y H:i:s")}}</td>
                                        <td>{{\App\Casts\VirtualStatus::lang($r->status)}}</td>
                                        <td>
                                            @if(!$r->end_date->isPast())
                                            <a href="{{$r->link}}" class="btn btn-flat btn-primary m-1">
                                                <li class="fa fa-handshake"></li>
                                            </a>
                                            @endif.
                                            @foreach(explode(",",$r->downloadable) as $k => $item)
                                                    <a href="{{$item}}" class="btn btn-flat btn-primary m-1">
                                                        <li class="fa fa-download"></li> {{$k+1}}
                                                    </a>
                                            @endforeach
                                            <a href="{{route("virtual.class.update",$r->id)}}" class="btn btn-flat btn-warning m-1">
                                                <li class="fa fa-edit"></li>
                                            </a>
                                                <a href="{{route("virtual.class.detail",$r->id)}}" class="btn btn-flat btn-primary m-1">
                                                    <li class="fa fa-eye"></li>
                                                </a>
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
