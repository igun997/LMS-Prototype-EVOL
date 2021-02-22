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
                    <form action="" method="post" enctype="multipart/form-data">
                        @if(session()->get("level") === "admin")
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" name="username" disabled value="{{$data->usarname ?? ""}}" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" name="password" value="{{$data->password ?? ""}}" class="form-control" />
                            </div>
                        @elseif(session()->get("level") === "guru")
                        @endif
                        <div class="form-group">
                            <button class="btn btn-flat btn-warning btn-block" type="submit">
                                Ubah Data
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
