{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">List Data Galleries</h1>

  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('galleries/create' ) }}"><i class="fa-solid fa-plus"></i> Tambah Data</a>
  </div>

  <table style="width:100%; border-collapse:collapse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Vendor_id</th>
        <th>Image</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($galleries as $gallery)
      <tr style="height: 42px">
        <td style="width: 100px" >{{ $gallery->id}}</td>
        <td style="width: 150px" >{{ $gallery->vendor_id }}</td>
        <td style="width: 100px" >{{ $gallery->image}}</td>
        <td style="width: 100px"><button class="btn-green" style="width: auto"><a href="{{ route('galleries.edit', $gallery->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('galleries', $gallery->id ) }}">
            @csrf
            @method('DELETE')
            <td style="width: 100px"><button class="btn-red" style="cursor: pointer; width: auto">Hapus</button></td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- Sintaks sidebar, beri kode #FFFFFF untuk menu aktif, dan beri kode #000000 untuk menu tidak aktif --}}
@include('layouts.sidebar')
<script>
//   id = role, user, vendor, service, gallery, review, day, hour
  ["role", "day", "vendor", "service", "user", "review", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("gallery").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divGallery").style.backgroundColor = "#d9a451"; //div.. itu kotak biru
</script>

@endsection
