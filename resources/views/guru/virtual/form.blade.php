@extends('layout.app')
@section('title',$title)
@section('css')

@endsection
@section('url',session()->get("url"))
@section('konten')
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0">{{$title}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{$route??route("virtual.class.add_action")}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Nama Sesi</label>
                            <input type="text" name="name" value="{{$data->name ?? ""}}" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-control">
                                @foreach(\App\Models\Revisi\Kela::whereNotNull("kelas_id")->get() as $row)
                                    <option value="{{$row->id}}" {{($row->id == @$data->kelas_id)?"selected":""}}>{{$row->kela->nama}} - {{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="link">Meet Link (JITSI)</label>
                            <input type="text" name="link" readonly class="form-control readonly" value="{{$data->link ?? \App\Casts\ModuleHelper::jitsi_link()}}"  />
                        </div>
                        <div class="form-group">
                            <label for="downloadable">Materi Terkait</label>
                            <input type="file" multiple name="downloadable[]" readonly class="form-control-file"  />
                        </div>
                        <div class="form-group">
                            <label for="start_date">Waktu Mulai</label>
                            <input type="text" name="start_date" value="{{$data->start_date??""}}" class="form-control date" />
                        </div>
                        <div class="form-group">
                            <label for="end_date">Waktu Selesai</label>
                            <input type="text" name="end_date" value="{{$data->end_date??""}}" class="form-control date" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-flat btn-success btn-block" type="submit">
                                Simpan Data
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function (){
            $(".date").datetimepicker({
                format:"YYYY-MM-DD H:m:s"
            });
        })
    </script>
@endsection
