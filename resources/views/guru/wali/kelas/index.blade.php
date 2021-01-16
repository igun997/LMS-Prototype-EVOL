@extends('layout.app')

@section('title')
{{$title}}
@endsection

@section('css')

@endsection

@section('url')

@endsection

@section('konten')
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
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach($siswa as $k => $r)
                            @foreach($r->siswas as $_k => $_r)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$_r->nis}}</td>
                                    <td>{{$_r->nama}}</td>
                                    <td>{{($_r->jk == 0)?"Laki Laki":"Perempuan"}}</td>
                                    <td>{{$_r->no_hp}}</td>
                                    <td>{{$r->kela->nama}} - {{$r->nama}}</td>
                                    <td>
                                        <a href="{{route("wali.kelas.detail",$_r->nis)}}" class="btn btn-flat btn-primary">
                                            <li class="fa fa-eye"></li>
                                        </a>
                                        <a href="{{route("wali.kelas.download",$_r->nis)}}" class="btn btn-flat btn-success">
                                            <li class="fa fa-download"></li>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function (){
            $("table").DataTable()
        })
    </script>
@endsection

