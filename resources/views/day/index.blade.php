{{-- //views/layouts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'List Data Days')
@section('content')
<div class="wrapper" style="padding-left: 340px">
  <h1 style="text-align: center;">List Data Days</h1>
  <table style="width:100%">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($days as $day)
      <tr>
        <td style="width: 200px" >{{ $day->id}}</td>
        <td style="width: 500px" >{{ $day->name }}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('days.edit', $day->id) }}">Edit</a></button></td>
  <form method="POST" action="{{ url('days', $day->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class="btn-red" style="cursor: pointer">Hapus</button></td>
  </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- Sidebar --}}
<div id="mySidebar" class="sidebar" style="width:320px">
    <table align="center" style="border: none">
      <tr>
        <td align="center" style="border: none">
          <p class="lms" style="font-size: 24pt">Pilih Menu</p>
        </td>
      </tr>
    </table>
      
    <a href="../roles" class="tdkpilih" >
      <table style="border: none">
        <tr>
          <td width="40px" style="border: none"><i class="fa-solid fa-user-gear" aria-hidden="true" style="font-size: 20pt"></i></td>
          <td style="font-size: 20pt; border: none">Role</td>
        </tr>
      </table>
    </a>
  
    <a href="../users" class="tdkpilih" >
      <table style="border: none">
        <tr>
          <td width="40px" style="border: none"><i class="fa-solid fa-users" aria-hidden="true" style="font-size: 20pt"></i></td>
          <td style="font-size: 20pt; border: none">User</td>
        </tr>
      </table>
    </a>
  
    <a href="../vendors" class="tdkpilih" >
      <table style="border: none">
        <tr>
          <td width="40px" style="border: none"><i class="fa-solid fa-shop" aria-hidden="true" style="font-size: 20pt"></i></td>
          <td style="font-size: 20pt; border: none">Vendor</td>
        </tr>
      </table>
    </a>
  
    <a href="../services" class="tdkpilih" >
      <table style="border: none">
        <tr>
          <td width="40px" style="border: none"><i class="fa-solid fa-book-open" aria-hidden="true" style="font-size: 20pt"></i></td>
          <td style="font-size: 20pt; border: none">Service</td>
        </tr>
      </table>
    </a>
  
    <a href="../galleries" class="tdkpilih" >
      <table style="border: none">
        <tr>
          <td width="40px" style="border: none"><i class="fa-solid fa-images" aria-hidden="true" style="font-size: 20pt"></i></td>
          <td style="font-size: 20pt; border: none">Gallery</td>
        </tr>
      </table>
    </a>
  
    <a href="../reviews" class="tdkpilih" >
      <table style="border: none">
        <tr>
          <td width="40px" style="border: none"><i class="fa-solid fa-star" aria-hidden="true" style="font-size: 20pt"></i></td>
          <td style="font-size: 20pt; border: none">Review</td>
        </tr>
      </table>
    </a>
  
    <div class="terpilih" style="padding: 10px; box-shadow: 0px 4px 20px 0px rgba(30, 214, 183, 0.9);">
      <a href="javascript:void(0)" style="text-decoration: none;">
        <table class="pilihan" style="border: none">
        <tr>
          <td width="40px" style="border: none"><i class="fa-solid fa-calendar-days" aria-hidden="true" style="font-size: 20pt"></i></td>
          <td style="font-size: 20pt; border: none">Day</td>
        </tr>
      </table>
      </a>
    </div>
    
    <a href="../hours" class="tdkpilih" >
        <table style="border: none">
        <tr>
            <td width="40px" style="border: none"><i class="fa-solid fa-clock" aria-hidden="true" style="font-size: 20pt"></i></td>
            <td style="font-size: 20pt; border: none">Hour</td>
        </tr>
        </table>
    </a>
    
  </div>

@endsection