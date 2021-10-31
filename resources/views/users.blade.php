@extends('admin')
@section('title', 'Data Users')
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          	<div class="card">
			   	<div class="card-header">
			        <h3 class="card-title">Data Users</h3>
			    </div>
			    <div class ="card-body">
			    	<a href="{{url('pegawai/materi/create')}}" class="btn btn-success my-2"><i class="fas fa-user-plus mr-1"></i>Tambah Data</a>
			    	<!-- @if (session('create'))
    					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="fas fa-plus-circle mr-1"></i>{{ session('create') }}
    					</div>
					@endif

					@if (session('update'))
    					<div class="alert alert-primary">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="far fa-edit mr-1"></i>{{ session('update') }}
    					</div>
					@endif

					@if (session('delete'))
    					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="fas fa-trash mr-1"></i>{{ session('delete') }}
    					</div>
					@endif -->
					<table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
					  <thead>
					  	<tr>
					  		<th>No</th>
					  		<th>ID</th>
					  		<th>Nama Depan</th>
							<th>Nama Belakang</th>
							<th>Email</th>
							<th>Verifikasi Email</th>
							<th>Password</th>
							<th>Pin</th>
							<th>No HP</th>
					  		<th>Verifikasi No HP</th>
					  		<th>Account Type</th>
					  		<th>Account Role</th>
					  		<th>Photo</th>
					  		<th>Last Login</th>
					  		{{-- <th>Aksi</th> --}}
					  		<th>Aksi</th>
					  	</tr>
					  </thead>
					  <tbody>
					  	@foreach($users as $row)
						    <tr>
						    	<td>{{ $loop->iteration }}</td>
						    	<td>{{ $row->id }}</td>
						    	<td>{{ $row->first_name }}</td>
						    	<td>{{ $row->last_name }}</td>
						    	<td>{{ $row->email }}</td>
						    	<td>{{ $row->email_verified_at }}</td>
						    	<td>{{ $row->password }}</td>
						    	<td>{{ $row->pin }}</td>
						    	<td>{{ $row->phone }}</td>
						    	<td>{{ $row->phone_verified_at }}</td>
						    	<td>{{ $row->account_type }}</td>
						    	<td>{{ $row->account_role }}</td>
						    	<td>{{ $row->photo }}</td>
						    	<td>{{ $row->last_login }}</td>
						    	<td>
						    		{{-- <a href="{{url('/pegawai/materi/show/'.$row->idMateri)}}" class="btn btn-outline-primary"><i class="fas fa-search"></i></i>detail</a> --}}
						    		{{-- <a href="{{url('/pegawai/materi/edit/'.$row->idMateri)}}" class="btn btn-outline-success"><i class="fas fa-edit"></i>edit</a> --}}

						    		<form action="{{$row->idMateri}}" method="post" class="d-inline">
						    		@method('delete')
						    		@csrf
						    		<button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt mr-1"></i>delete</button>
						    		</form>
						    	</td>
						    </tr>
						 @endforeach
					  </tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
		{{-- @include('sweetalert::alert') --}}
	</div>
</section>

@endsection
