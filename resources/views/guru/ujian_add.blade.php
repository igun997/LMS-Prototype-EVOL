@extends('layout.app')
@section('title',$title)
@section('css')

@endsection
@section('url',session()->get("url"))
@section('konten')
<div class="row">
  <div class="col-8 offset-2">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">{{$title}}</h5>
      </div>
      <div class="card-body">
        <form  action="" method="post" onsubmit="return false">
          <div class="row">
            <div class="col-6">
              <h5>Info Ujian</h5>
              <div class="form-group">
                <label>Mata Pelajaran</label>
                <select class="form-control" name="matpel_id">
                    <option value="">== Pilih == </option>
                    @foreach($matpel as $k => $v)
                    <option value="{{$v->id}}">
                      @if(isset($v->kela->kela->nama))
                      {{$v->nama}} ({{$v->kela->kela->nama}}_{{$v->kela->nama}})
                      @else
                      {{$v->nama}} ({{$v->kela->nama}})
                      @endif
                    </option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Nama Ujian</label>
                <input type="text" class="form-control" name="nama_ujian" value="">
              </div>
              <div class="form-group">
                <label>Tgl. Dibuka</label>
                <input type="text" class="form-control date" name="tgl_dibuka" value="">
              </div>
              <div class="form-group">
                <label>Tgl. Ditutup</label>
                <input type="text" class="form-control date" name="tgl_ditutup" value="">
              </div>
              <div class="form-group">
                <label>Waktu</label>
                <input type="text" class="form-control" name="waktu" value="">
              </div>
              <div class="form-group">
                <label>PIN</label>
                <input type="text" class="form-control" name="pin" value="">
              </div>

            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-12">
                  <h5>Tambah Soal</h5>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Judul Soal</label>
                    <select class="form-control" id="judul_soal">
                      <option value="">== Pilih == </option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <label style="color:white">Judul Soal</label>
                  <button type="button" id="addToUjian" class="btn btn-success">
                    Tambah ke Ujian
                  </button>
                </div>
              </div>
              <div class="col-6">
                <button type="submit"  class="btn btn-primary btn-block">
                  Simpan Ujian
                </button>
              </div>
            </div>
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-bordered" id="dtable">
                  <thead>
                    <th>No</th>
                    <th>Judul Soal</th>
                    <th>Poin</th>
                    <th>Opsi</th>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection

@section('js')
<script src="{{url("assets/plugins/ckeditor/ckeditor.js")}}" charset="utf-8"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".date").datetimepicker({
      format:"YYYY-MM-DD H:M"
    });
    var a = $("#judul_soal").select2("destroy");
  });
</script>
@endsection
