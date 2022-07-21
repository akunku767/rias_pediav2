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
      <a href="#create" data-toggle="modal" data-target="create" class="tambahdata"><i class="fa fa-plus"></i> Tambah Data</a>
		<!-- Example DataTables Card-->
      <div class="card mb-3" style="margin-top: 20px">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" style="text-align: center" cellspacing="0">
              <thead>
                <tr>
                  <th width="10%">ID</th>
                  <th>Role</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="10%">ID</th>
                  <th>Role</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($roles as $role)
                <tr style="height: 42px">
                  <td style="width: 200px" >{{ $role->id}}</td>
                  <td style="width: 500px" >{{ $role->name }}</td>
                  <td style="width: 80px"><a href=""><i class="fa fa-pencil text-dark" style="font-size: 15pt"></i></a></td>
                  <td style="width: 80px"><a href=""><i class="fa fa-trash text-danger" style="font-size: 15pt"></i></a></td>
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

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i style="font-size: 15pt;" class="fa fa-angle-up"></i>
  </a>
@else
  <script>window.location.href = "/";</script>
@endif