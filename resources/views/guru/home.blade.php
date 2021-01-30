@extends('layout.app')
@section('title',$title)
@section('css')
<link rel="stylesheet" href="{{url("assets/plugins/chart.js/Chart.min.css")}}">
@endsection
@section('url',session()->get("url"))
@section('konten')
<div class="row">
  <div class="col-3">
      <div class="card card-primary card-outline">
          <div class="card-body box-profile">

              <h3 class="profile-username text-center">{{$identity->nama}}</h3>

              <p class="text-muted text-center">Guru</p>

              <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                      <b>NIP</b> <a class="float-right">{{$identity->nip}}</a>
                  </li>
                  <li class="list-group-item">
                      <b>Email</b> <a class="float-right">{{$identity->email}}</a>
                  </li>
                  <li class="list-group-item">
                      <b>No HP</b> <a class="float-right">{{$identity->no_hp}}</a>
                  </li>
                  <li class="list-group-item">
                      <b>Mata Pelajaran</b>
                      <a class="float-right">
                          @foreach($identity->matpels as $k => $r)
                            <p>
                                {{$r->kela->kela->nama}} - {{$r->kela->nama}} / {{$r->nama}}
                            </p>
                          @endforeach
                      </a>
                  </li>
                  <li class="list-group-item">
                      <b>Wali Kelas </b>
                      @foreach($identity->kelas as $kela)
                          <a class="float-right">{{$kela->kela->nama}} - {{$kela->nama}}</a>
                      @endforeach
                  </li>
              </ul>
          </div>
          <!-- /.card-body -->
      </div>
  </div>
  <div class="col-9">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Selamat Datang Guru</h5>
      </div>
      <div class="card-body">

      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{url("assets/plugins/chart.js/Chart.bundle.min.js")}}" charset="utf-8"></script>
<script type="text/javascript">

</script>
@endsection
