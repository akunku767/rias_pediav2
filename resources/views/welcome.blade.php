{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'List Data Days')
@section('content')

<div class="wrapper" style="padding-left: 260px">
  <h1 style="text-align: center;">Dashboard</h1>
  <p>Silahkan pilih menu berikut</h1>
</div>

{{-- Sintaks sidebar, beri kode #FFFFFF untuk menu aktif, dan beri kode #000000 untuk menu tidak aktif --}}
@include('layouts.sidebar')
<script>
  //   id = role, user, vendor, service, gallery, review, day, hour
  ["role", "user", "vendor", "service", "gallery", "review", "day", "hour"].forEach(id => document.getElementById(id).style.color = "#000000")
</script>
@endsection
