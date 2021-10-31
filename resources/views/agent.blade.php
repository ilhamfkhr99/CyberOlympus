@extends('admin')
@section('title', 'Data Agen')
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          	<div class="card">
			   	<div class="card-header">
			        <h3 class="card-title">Data Agen</h3>
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
					  		<th>Store Name</th>
							<th>Partner Id</th>
							<th>Pin Lock</th>
							<th>Store Open</th>
							<th>Store Close</th>
							<th>Address</th>
							<th>Kelurahan</th>
					  		<th>Kecamatan</th>
					  		<th>Kota</th>
					  		<th>Provinsi</th>
					  		<th>Kode Pos</th>
					  		<th>Latitude</th>
					  		<th>Longitude</th>
					  		<th>KTP</th>
					  		<th>KK</th>
					  		<th>NPWP</th>
					  		<th>No Rekening</th>
					  		<th>Buku Rekening</th>
					  		<th>Point</th>
					  		<th>Credit Limit</th>
					  		<th>Subcription</th>
					  		<th>Max Load</th>
					  		<th>Default Agen</th>
					  		<th>Aksi</th>
					  	</tr>
					  </thead>
					  <tbody>
					  	@foreach($agent as $row)
						    <tr>
						    	{{-- <td>{{ $loop->iteration }}</td> --}}
						    	<td>{{ $row->id }}</td>
						    	<td>{{ $row->store_name }}</td>
						    	<td>{{ $row->partner_id }}</td>
						    	<td>{{ $row->pin_lock }}</td>
						    	<td>{{ $row->store_open }}</td>
						    	<td>{{ $row->store_close }}</td>
						    	<td>{{ $row->address }}</td>
						    	<td>{{ $row->kelurahan }}</td>
						    	<td>{{ $row->kecamatan }}</td>
						    	<td>{{ $row->kota }}</td>
						    	<td>{{ $row->provinsi }}</td>
						    	<td>{{ $row->kode_pos }}</td>
						    	<td>{{ $row->latitude }}</td>
						    	<td>{{ $row->longitude }}</td>
						    	<td>{{ $row->ktp }}</td>
						    	<td>{{ $row->kk }}</td>
						    	<td>{{ $row->npwp }}</td>
						    	<td>{{ $row->no_rekening }}</td>
						    	<td>{{ $row->buku_rekening }}</td>
						    	<td>{{ $row->point }}</td>
						    	<td>{{ $row->credit_limit }}</td>
						    	<td>{{ $row->subscription }}</td>
						    	<td>{{ $row->max_load }}</td>
						    	<td>{{ $row->default_agent }}</td>
						    	<td>
						    		<a href="{{url('product_category/'.$row->category)}}" class="btn btn-outline-primary"><i class="fas fa-search"></i></i>detail</a>
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
