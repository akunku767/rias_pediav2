{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="content" style="padding-left: 210px">
    <h1 style="text-align: center; padding-bottom: 14px; border-bottom: 2px solid #444; margin-top: 0;">List Data Role</h1>
    {{-- Card Menu --}}
    <section id="maincard">
      <div class="row justify-content-center">
          <div class="col-sm-6">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Data </h5>
                      <p class="card-text">Jumlah Data Saat Ini Adalah <u><b></b></u> Data .</p>
                      <div class="row justify-content-between">
                          <div class="col-4">
                              <a href="#" class="btn btn-dark  border-0" style="background-image: linear-gradient(to bottom right, rgb(24, 26, 190), rgb(0, 159, 199));">Lihat</a>
                          </div>
                          <div class="col-4">
                              <p class="txt text-end fs-3"><i class="bi bi-bar-chart-line"></i> Data</i></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data </h5>
                    <p class="card-text">Jumlah Data  Saat Ini Adalah <u><b></b></u> Data .</p>
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <a href="#" class="btn btn-dark border-0" style="background-image: linear-gradient(to bottom right, rgb(24, 26, 190), rgb(0, 159, 199));">Lihat</a>
                        </div>
                        <div class="col-4">
                            <p class="txt text-end fs-3"><i class="bi bi-bar-chart-line"></i> Data</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data </h5>
                    <p class="card-text">Jumlah Data  Saat Ini Adalah <u><b></b></u> Data .</p>
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <a href="#" class="btn btn-dark  border-0" style="background-image: linear-gradient(to bottom right, rgb(24, 26, 190), rgb(0, 159, 199));">Lihat</a>
                        </div>
                        <div class="col-4">
                            <p class="txt text-end fs-3"><i class="bi bi-bar-chart-line"></i> Data</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Data </h5>
                  <p class="card-text">Jumlah Data  Saat Ini Adalah <u><b></b></u> Data .</p>
                  <div class="row justify-content-between">
                      <div class="col-4">
                          <a href="#" class="btn btn-dark border-0" style="background-image: linear-gradient(to bottom right, rgb(24, 26, 190), rgb(0, 159, 199));">Lihat</a>
                      </div>
                      <div class="col-4">
                          <p class="txt text-end fs-3"><i class="bi bi-bar-chart-line"></i> Data</i></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    </section>
    

{{-- Sintaks sidebar, beri kode #FFFFFF untuk menu aktif, dan beri kode #000000 untuk menu tidak aktif --}}
@include('layouts.sidebar')
<script>
  //   id = role, user, vendor, service, gallery, review, day, hour
  ["role", "user", "vendor", "service", "gallery", "review", "day", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
</script>
@endsection