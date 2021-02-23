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
                    <form action="{{route("wali.raport.add.post")}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Tahun Ajaran</label>
                            <select name="rombel_id" id="rombel_id" class="form-control">
                                @foreach(\App\Models\Revisi\Rombel::all() as $k => $v)
                                    <option value="{{$v->id}}">{{$v->nama}} - {{\App\Casts\RombelSemester::lang($v->semester)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Inisialisasi Raport</button>
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
