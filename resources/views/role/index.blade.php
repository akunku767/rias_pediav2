{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'List Role Days')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">List Role Days</h1>

  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('roles/create' ) }}"><i class="fa-solid fa-plus"></i> Tambah Data</a>
  </div>

  <table style="width:100%; border-collapse:collapse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($roles as $role)
      <tr style="height: 42px">
        <td style="width: 200px" >{{ $role->id}}</td>
        <td style="width: 500px" >{{ $role->name }}</td>
        <td style="width: 100px"><button class="btn-green" style="width: auto"><a href="{{ route('roles.edit', $role->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('days', $role->id ) }}">
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
  ["role", "user", "vendor", "service", "gallery", "review", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("role").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divROle").style.backgroundColor = "#3F51B5"; //div.. itu kotak biru
</script>

@endsection
