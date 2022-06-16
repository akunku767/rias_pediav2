<!-- //views/post/create.blade.php -->
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">Create Data Hours</h1>
  
  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('hours' ) }}"><i class="fa-solid fa-circle-left"></i> Kembali</a>
  </div>

  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" action="{{ url('hours') }}">
    @csrf
    <input name="day_id" type="number" placeholder="day_id" style="font-size: 14pt">
    <input name="vendor_id" type="number" placeholder="vendor_id" style="font-size: 14pt">
    <button class="btn-blue" style="font-size: 14pt; cursor: pointer">Tambah Data</button>
  </form>
</div>

{{-- Sintaks sidebar, beri kode #FFFFFF untuk menu aktif, dan beri kode #000000 untuk menu tidak aktif --}}
@include('layouts.sidebar')
<script>
//   id = role, user, vendor, service, gallery, review, day, hour
  ["role", "day", "vendor", "service", "gallery", "review", "user"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("hour").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divHour").style.backgroundColor = "#3F51B5"; //div.. itu kotak biru
</script>


@endsection
