{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'List Data Days')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="content" style="padding-left: 210px">
  <h1 style="text-align: center;" class="lms fs-1 pt-3">Dashboard</h1>
  <p>Silahkan pilih menu berikut</h1>
    <div class="card text-white bg-primary" style="max-width: 18rem;">
      <div class="card-header">Header</div>
      <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

{{-- Sintaks sidebar, beri kode #FFFFFF untuk menu aktif, dan beri kode #000000 untuk menu tidak aktif --}}
@include('layouts.sidebar')
<script>
  //   id = role, user, vendor, service, gallery, review, day, hour
  ["role", "user", "vendor", "service", "gallery", "review", "day", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
</script>
@endsection
