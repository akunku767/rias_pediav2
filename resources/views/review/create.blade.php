<!-- //views/post/create.blade.php -->
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">Create Data Reviews</h1>
  
  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('reviews' ) }}"><i class="fa-solid fa-circle-left"></i> Kembali</a>
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
  
  <form method="POST" action="{{ url('reviews') }}">
    @csrf
    <input name="description" type="text" placeholder="description" style="font-size: 14pt"> 
    <input name="score" type="text" placeholder="score" style="font-size: 14pt"> 
    <input name="user_id" type="text" placeholder="user_id" style="font-size: 14pt"> 
    <input name="vendor_id" type="text" placeholder="vendor_id" style="font-size: 14pt"> 
    <button class="btn-blue" style="font-size: 14pt; cursor: pointer">Tambah Data</button>
  </form>
</div>

{{-- Sintaks sidebar, beri kode #FFFFFF untuk menu aktif, dan beri kode #000000 untuk menu tidak aktif --}}
@include('layouts.sidebar')
<script>
//   id = role, user, vendor, service, gallery, review, day, hour
  ["role", "user", "vendor", "service", "gallery", "day", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("review").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divReview").style.backgroundColor = "#d9a451"; //div.. itu kotak biru
</script>


@endsection
