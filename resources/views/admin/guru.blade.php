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
        <div class="col-12">
          <button type="button" id="form" class="btn btn-default m-1">
            <i class="fa fa-plus"></i> Tambah Guru
          </button>
          <div class="col-12">
            <form class="" action="" id="formSubmit" method="post">
              <div class="form-group">
                <label>NIP</label>
                <input type="text" class="form-control" name="nip" placeholder="" required>
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="" required>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="8" cols="80"></textarea>
              </div>
              <div class="form-group">
                <label>No HP</label>
                <input type="text" class="form-control" name="no_hp" placeholder="" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">
                  Simpan
                </button>
              </div>
            </form>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dtable">
              <thead>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Mengampu</th>
                <th>Opsi</th>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  var dtable = $("#dtable").DataTable({
    ajax:"{{route("admin.guru.api.read")}}",
    createdRow:function(r,d,i){
      btn = '<button type="button" class="btn btn-warning ubah" data-id="'+d[1]+'">Ubah</button>';
      $("td",r).eq(7).html(btn);
    }
  });
  var toggle = true;
  temp = $("#formSubmit").html();
  console.log(temp);
  $("#formSubmit").hide();
  $("#form").on('click', function(event) {
    event.preventDefault();
    if (toggle) {
      $("#formSubmit").show();
      toggle = false;
    }else {
      $("#formSubmit").hide();
      toggle = true;
    }
  });
  var url = null;
  $("#dtable").on('click','.ubah', function(event) {
    event.preventDefault();
    url = "{{route("admin.guru.api.edit")}}"+"/"+$(this).data("id");
    console.log(url);
    $("#formSubmit button[type=submit]").html("Ubah");
    $.get("{{route("admin.guru.api.show")}}/"+$(this).data("id"),function(s){
      if (s.status == 1) {
        $("#formSubmit input[name=nama]").val(s.data.nama);
        $("#formSubmit input[name=alamat]").val(s.data.alamat);
        $("#formSubmit input[name=no_hp]").val(s.data.no_hp);
        $("#formSubmit input[name=email]").val(s.data.email);
        $("#formSubmit input[name=password]").removeAttr('required');
        $("#formSubmit input[name=nip]").val(s.data.nip);
        $("#formSubmit input[name=nip]").attr('disabled',true);
      }else {
        toastr.warning("Data Kelas Tidak Ditemukan");
      }
    }).fail(function(){
      toastr.warning("Anda Terputus Dengan Server");
    });
    $("#formSubmit button[type=submit]").attr("class","btn btn-warning");
    $("#formSubmit").show();
  });
  $("#formSubmit").on('submit',function(event) {
    event.preventDefault();
    data = $(this).serializeArray();
    if (url == null) {
      url = "{{route("admin.guru.api.add")}}";
    }
    $.post(url,data,function(r){
      if (r.status == 1) {
        toastr.success("Data Tersimpan")
      }else {
        toastr.warning("Data Gagal Di Simpan")
      }
      $("#formSubmit")[0].reset();
      // $("#formSubmit").hide();
      dtable.ajax.reload();
    }).fail(function(){
      toastr.warning("Anda Terputus Dengan Server");
    })
    url = null;
    $("#formSubmit").html(temp);
    $("#formSubmit").hide();
  });
</script>
@endsection
