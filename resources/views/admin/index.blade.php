@if (session('role')=="User" || session('role')=="")
<script>
  window.location.href = "/";
</script>
@endif

@extends('admin.layouts.app')
@section('title', 'Rias Pedia - Admin Dashboard')
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('dashboard') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card dashboard text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-cogs"></i>
            </div>
            <div class="mr-5">
              @if($roles->count() == 0)
              <h5>Empty Role</h5>
              @else
              <h5>{{ $roles->count() }} Total Roles</h5>
              @endif
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="{{ url('dashboard/roles') }}">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card dashboard text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-users"></i>
            </div>
            <div class="mr-5">
              @if($users->count() == 0)
              <h5>Empty User</h5>
              @else
              <h5>{{ $users->count() }} Total Users</h5>
              @endif
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="bookings.html">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card dashboard text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-home"></i>
            </div>
            <div class="mr-5">
              @if($vendors->count() == 0)
              <h5>Empty Vendor</h5>
              @else
              <h5>{{ $vendors->count() }} Total Vendors</h5>
              @endif
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
    <!-- /cards -->
    <h2></h2>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-bar-chart"></i>Statistic</h2>
      </div>
      <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
    </div>
  </div>
  <!-- /.container-fluid-->
</div>
@endsection

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i style="font-size: 15pt;" class="fa fa-angle-up"></i>
</a>