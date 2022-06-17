{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">List Data Services</h1>

  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('services/create' ) }}"><i class="fa-solid fa-plus"></i> Tambah Data</a>
  </div>

  <table style="width:100%; border-collapse:collapse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Vendor Id</th>
        {{-- <th>Password</th> --}}
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $service)
      <tr style="height: 42px">
        <td style="width: 100px" >{{ $service->id}}</td>
        <td style="width: 150px" >{{ $service->name }}</td>
        <td style="width: 150px" >{{ $service->price }}</td>
        <td style="width: 150px" >{{ $service->vendor_id }}</td>
        {{-- <td style="width: 150px" >{{ $user->password }}</td> --}}
        <td style="width: 100px"><button class="btn-green" style="width: auto"><a href="{{ route('services.edit', $service->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('services', $service->id ) }}">
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
  ["role", "day", "vendor", "hour", "gallery", "review", "user"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("service").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divService").style.backgroundColor = "#3F51B5"; //div.. itu kotak biru
</script>

@endsection
