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
                                <th>Nilai</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($)
                                <tr>

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

