@extends('admin.layouts.app')
@section('title', 'Rias Pedia - Roles Dashboard')

@if (session('role')=="Admin" || session('role')=="Vendor")

  @section('content')

  @endsection

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i style="font-size: 15pt;" class="fa fa-angle-up"></i>
  </a>
@else
  <script>window.location.href = "/";</script>
@endif