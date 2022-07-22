<head>
  <!-- Favicons--> 
  <link rel="shortcut icon" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  
  {{-- <!-- Bootstrap core CSS-->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Main styles -->
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> --}}

</head>

@if (session('role')=="User" || session('role')=="")
<script>
  window.location.href = "/";
</script>
@endif

@extends('admin.layouts.app')
@section('title', 'Rias Pedia - Roles Dashboard')
@section('content')

<main>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="margin-bottom: 30px">
      <li class="breadcrumb-item">
        <a href="{{ url('dashboard') }}">Dashboard</a>
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
        <i class="fa fa-table"></i> Data Table Roles
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" style="text-align: center" cellspacing="0">
            <thead>
              <tr>
                <th width="10%" style="color: #000000">ID</th>
                <th style="color: #000000">Role</th>
                <th colspan="2" style="color: #000000">Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th width="10%" style="color: #000000">ID</th>
                <th style="color: #000000">Role</th>
                <th colspan="2" style="color: #000000">Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach ($roles as $role)
              <tr style="height: 42px">
                <td style="width: 200px">{{ $role->id}}</td>
                <td style="width: 500px">{{ $role->name }}</td>
                <td style="width: 80px"><a class="btntable" href=""><i class="fa fa-pencil text-dark"
                      style="font-size: 15pt"></i></a></td>
                <td style="width: 80px"><a class="btntable" href=""><i class="fa fa-trash text-danger"
                      style="font-size: 15pt"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated at {{ $updated->updated_at }}</div>
    </div>
    <!-- /tables-->
  </div>
</div>
</main>

{{-- Modal create --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="cursor: pointer">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form method="POST" action="{{ route('roles.create') }}">
        @csrf
        <div class="modal-body">
          <table width="100%">
            <tr>
              <td width="40%">
                <span>Role</span>
              </td>
              <td width="60%">
                <input type="text" name="name" placeholder="Input role for user" style="width: 100%" required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn text-light" style=" background-color: #00AB41">Create</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /container-fluid-->
@endsection

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i style="font-size: 15pt;" class="fa fa-angle-up"></i>
</a>

<script>
  $(document).ready(function(){
    $('#dataTable').DataTable();
  });
</script>