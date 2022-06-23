{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">List Data Reviews</h1>

  <div style="margin-bottom: 20px">
    <a class="tambah" href="{{ url('reviews/create' ) }}"><i class="fa-solid fa-plus"></i> Tambah Data</a>
  </div>

  <table style="width:100%; border-collapse:collapse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Description</th>
        <th>Score</th>
        <th>User Id</th>
        <th>Vendor Id</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reviews as $review)
      <tr style="height: 42px">
        <td style="width: 200px" >{{ $review->id}}</td>
        <td style="width: 500px" >{{ $review->description }}</td>
        <td style="width: 500px" >{{ $review->score }}</td>
        <td style="width: 500px" >{{ $review->user_id }}</td>
        <td style="width: 500px" >{{ $review->vendor_id }}</td>
        <td style="width: 100px"><button class="btn-green" style="width: auto"><a href="{{ route('reviews.edit', $review->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('reviews', $review->id ) }}">
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
  ["role", "user", "vendor", "service", "gallery", "day", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
  document.getElementById("review").style.color = "#FFFFFF"; //tulis menu aktif sesuai tabel
  document.getElementById("divReview").style.backgroundColor = "#d9a451"; //div.. itu kotak biru
</script>

@endsection
