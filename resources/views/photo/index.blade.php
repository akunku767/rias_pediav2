{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">List Data Photos</h1>

  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('photos/create' ) }}"><i class="fa-solid fa-plus"></i> Tambah Data</a>
  </div>

  <table style="width:100%; border-collapse:collapse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Vendor Id</th>
        {{-- <th>Password</th> --}}
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($photos as $photo)
      <tr style="height: 42px">
        <td style="width: 100px" >{{ $photo->id}}</td>
        <td style="width: 150px" >{{ $photo->images }}</td>
        <td style="width: 150px" >{{ $photo->vendor_id }}</td>
        {{-- <td style="width: 150px" >{{ $user->password }}</td> --}}
        <td style="width: 100px"><button class="btn-green" style="width: auto"><a href="{{ route('photos.edit', $photo->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('photos', $photo->id ) }}">
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
  ["role", "day", "vendor", "hour", "service", "review", "user"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("gallery").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divGallery").style.backgroundColor = "#d9a451"; //div.. itu kotak biru
</script>

@endsection
