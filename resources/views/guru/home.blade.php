@extends('layout.app')
@section('title',$title)
@section('css')

@endsection
@section('url',session()->get("url"))
@section('konten')
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Statistik Pengerjaan Ujian</h5>
      </div>
      <div class="card-body">

      </div>
    </div>
  </div>
  <div class="col-6">
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

@endsection
