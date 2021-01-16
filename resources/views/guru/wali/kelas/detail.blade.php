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
                <h5 class="m-0">Progress Ujian</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>KKM</th>
                            <th>Jenis Ujian</th>
                            <th>Nilai</th>
                            <th>Pedikat</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $k => $row)
                                <tr>
                                    <td>{{($k+1)}}</td>
                                    <td>{{$row["ujian"]->matpel->nama}}</td>
                                    <td>65</td>
                                    <td>{{\App\Casts\UjianType::lang($row["ujian"]->type)}}</td>
                                    <td>{{$row["nilai"]}}</td>
                                    <td>
                                        @if($row["nilai"] > 0 && $row["nilai"] <= 50)
                                            C
                                        @elseif($row["nilai"] > 50)
                                            B
                                        @else
                                            A
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
@endsection

@section('js')
    <script>
        $(document).ready(function (){
            $("table").DataTable()
        })
    </script>
@endsection

