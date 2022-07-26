<head>
  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
    href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
    href="{{ asset('img/apple-touch-icon-114x114-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
    href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

@if (session('role')=="User" || session('role')=="")
<script>
  window.location.href = "/";
</script>
@endif

@extends('admin.layouts.app')
@section('title', 'Rias Pedia - Vendor Dashboard')
@section('content')

<div class="content-wrapper">

  

  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="margin-bottom: 30px">
      <li class="breadcrumb-item">
        <a href="{{ route('dashboard.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
    </ol>
    <a href="#create" data-toggle="modal" data-target="#create" class="tambahdata">
      <i class="fa fa-plus"></i>
      Create
    </a>
    <!-- Example DataTables Card-->
    <div class="card mb-3" style="margin-top: 20px">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Vendors
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="dataTable" width="100%" style="text-align: center"
            cellspacing="0">
            <thead>
              <tr>
                <th width="10%" style="color: #000000">No.</th>
                <th style="color: #000000">Name</th>
                <th style="color: #000000">User</th>
                <th style="color: #000000">Phone</th>
                <th style="color: #000000">Geometry</th>
                <th style="color: #000000">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($vendors as $no => $vendor)
              <tr style="height: 42px">
                <td style="width: 10%">{{ ++$no }}</td>
                <td align="left">{{ $vendor->name }}</td>
                <td align="left">
                  @foreach ($users as $user)
                    @if(($vendor->user_id) == ($user->id))
                      {{ $user->name }}
                    @endif
                  @endforeach
                </td>
                <td align="left">{{ $vendor->phone }}</td>
                <td align="left">{{ $vendor->geometry }}</td>
                <td style="width: 80px">
                  <a class="btntable" href="#Edit{{ $vendor->id }}" data-toggle="modal"
                    data-target="#Edit{{ $vendor->id }}">
                    <i class="fa fa-pencil text-dark" style="font-size: 15pt"></i>
                  </a>
                  @include('admin.vendor.edit')
                  &nbsp;
                  {{-- | &nbsp; --}}
                  <a class="btntable" href="#Delete{{ $vendor->id }}" data-toggle="modal"
                    data-target="#Delete{{ $vendor->id }}">
                    <i class="fa fa-trash text-danger" style="font-size: 15pt"></i>
                  </a>
                  @include('admin.vendor.delete')
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @if(isset($updated->updated_at))
        <div class="card-footer small text-muted">Updated at {{ $updated->updated_at }}</div>
      @endif
    </div>
    <!-- /tables-->
  </div>
  <!-- /container-fluid-->
</div>

{{-- Modal create --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Data Vendor</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="cursor: pointer">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form method="POST" action="{{ route('vendors.create') }}">
        @csrf
        <div class="modal-body">
          <table class="table-borderless" width="100%">
            <tr height="40px" style="font-size: 1.15rem; color: black;">
              <td width="40%">
                <span>Name</span>
              </td>
              <td width="60%">
                <input type="text" name="name" placeholder="Input name" style="width: 100%"required>
              </td>
            </tr>
            <tr height="40px" style="font-size: 1.15rem; color: black;">
              <td width="40%">
                <span>User</span>
              </td>
              <td width="60%">
                <input name="user" list="user_id" placeholder="Choose user" style="width: 100%" required>
                <datalist id="user_id">  
                  @foreach ($users as $user)
                    <option data-value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </datalist>
              </td>
            </tr>
            <tr height="40px" style="font-size: 1.15rem; color: black;">
              <td width="40%">
                <span>Phone</span>
              </td>
              <td width="60%">
                <input type="number" name="phone" placeholder="Input phone" style="width: 100%" required>
              </td>
            </tr>
            <tr height="40px" style="font-size: 1.15rem; color: black;">
              <td width="40%">
                <span>Geometry</span>
              </td>
              <td width="60%">
                <a href="javascript:void(0)" class="btn btn-primary" onclick="getLocation()" style="margin-top: 10px" >get GPS</a>
                <input type="text" id="geometry" name="geometry" placeholder="Please press get GPS!" style="width: 100%; margin-top: 8px" readonly  required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn text-light btn-create" style="background-color: #0bcd55">Create</a>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#dataTable').DataTable();
  });

  var x = document.getElementById("geometry");
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
      x.value = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    x.value = position.coords.latitude + "," + position.coords.longitude;
  }

</script>

@endsection



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i style="font-size: 15pt;" class="fa fa-angle-up"></i>
</a>