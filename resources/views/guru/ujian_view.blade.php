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
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
          <table class="table table-bordered" id="dtable">
            <thead>
              <th>No</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Nilai</th>
              <th>Dibuat</th>
              <th>Opsi</th>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
          </div>>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    var dt = $("#dtable").DataTable({
      ajax:"{{route("guru.ujian.haisl.api.read",$data->id)}}"
    });
    $("#dtable").on('click', '.koreksi', function(event) {
      event.preventDefault();
      c = prompt("Masukan Total Nilai Essay ");
      if (c != "" || c != "") {
        dform = {nilai:c};
        $.post("{{route("guru.ujian.hasil.api.update")}}/"+$(this).data("id"),dform,function(r){
          if (r.status == 1) {
            toastr.success("Sukses Input Nilai");
            dt.ajax.reload();
          }else {
            toastr.warning("Input Nilai Gagal");
          }
        }).fail(function(){
          toastr.error("Anda terputus dari server");
        });
      }else {
        toastr.warning("Tolong isi 1 - 100");
      }
    });
  });
</script>
@endsection
