@extends('admin.layouts.app')
@section('title', 'Rias Pedia - Roles Dashboard')

@if (session('role')=="Admin" || session('role')=="Vendor")

  @section('content')
        <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
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
                  <td style="width: 100px"><button class="btn-green" style="width: auto"><a href="{{ route('roles.edit', $role->id) }}">Edit</a></button></td>
                  <form method="POST" action="{{ url('roles', $role->id ) }}">
                      @csrf
                      @method('DELETE')
                      <td style="width: 100px"><button class="btn-red" style="cursor: pointer; width: auto">Hapus</button></td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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