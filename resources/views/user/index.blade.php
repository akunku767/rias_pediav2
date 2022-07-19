{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">List Data Users</h1>

  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('users/create' ) }}"><i class="fa-solid fa-plus"></i> Tambah Data</a>
  </div>

  <table style="width:100%; border-collapse:collapse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        {{-- <th>Password</th> --}}
        <th>Role_id</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr style="height: 42px">
        <td style="width: 100px" >{{ $user->id}}</td>
        <td style="width: 150px" >{{ $user->name }}</td>
        <td style="width: 150px" >{{ $user->email }}</td>
        {{-- <td style="width: 150px" >{{ $user->password }}</td> --}}
        <td style="width: 150px" >{{ $user->role_id }}</td>
        <td style="width: 100px"><button class="btn-green" style="width: auto"><a href="{{ route('users.edit', $user->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('users', $user->id ) }}">
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
{{-- @include('layouts.sidebar') --}}
{{-- <script>
//   id = role, user, vendor, service, gallery, review, day, hour
  ["role", "day", "vendor", "service", "gallery", "review", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("user").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divUser").style.backgroundColor = "#d9a451"; //div.. itu kotak biru
</script> --}}

@endsection
