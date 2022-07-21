@extends('admin.layouts.app')
@section('title', 'Rias Pedia - Roles Dashboard')

@if (session('role')=="Admin" || session('role')=="Vendor")

@section('content')
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
      <i class="fa fa-table"></i> Data Table Example
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
<!-- /container-fluid-->
</div>



@endsection

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
      <div class="modal-body">
        <form action="{{  }}"></form>
        <span>Role</span>
        <input type="text">
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-success" href="{{ route('session.logout') }}">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i style="font-size: 15pt;" class="fa fa-angle-up"></i>
</a>
@else
<script>
  window.location.href = "/";
</script>
@endif