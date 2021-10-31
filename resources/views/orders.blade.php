@extends('admin')
@section('title', 'Data Product')
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          	<div class="card">
			   	<div class="card-header">
			        <h3 class="card-title">Data Orders</h3>
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
					  		<th>invoice_id</th>
							<th>customer_id</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Kelurahan</th>
							<th>Kecamatan</th>
					  		<th>Kota</th>
					  		<th>Provinsi</th>
					  		<th>Kode Pos</th>
					  		<th>Latitude</th>
					  		<th>Longitude</th>
					  		<th>Agent id</th>
					  		<th>Agent Name</th>
					  		<th>Payment Method</th>
					  		<th>Payment Link</th>
					  		<th>Payment Date</th>
					  		<th>Buy By</th>
					  		<th>Payment Total</th>
					  		<th>Coupon Id</th>
					  		<th>Payment Discount Code</th>
					  		<th>Payment Discount</th>
					  		<th>Payment Final</th>
					  		<th>Order Weight</th>
					  		<th>Order Distance</th>
					  		<th>Delivery Status</th>
					  		<th>Delivery Fee</th>
					  		<th>Delivery Track</th>
					  		<th>Delivery Time</th>
					  		<th>Delivery Date</th>
					  		<th>Order Time</th>
					  		<th>Status</th>
					  	</tr>
					  </thead>
					  <tbody>
					  	@foreach($orders as $row)
						    <tr>
						    	{{-- <td>{{ $loop->iteration }}</td> --}}
						    	<td>{{ $row->id }}</td>
						    	<td>{{ $row->invoice_id }}</td>
						    	<td>{{ $row->customer_id }}</td>
						    	<td>{{ $row->name }}</td>
						    	<td>{{ $row->phone }}</td>
						    	<td>{{ $row->address }}</td>
						    	<td>{{ $row->kelurahan }}</td>
						    	<td>{{ $row->kecamatan }}</td>
						    	<td>{{ $row->kota }}</td>
						    	<td>{{ $row->provinsi }}</td>
						    	<td>{{ $row->kode_pos }}</td>
						    	<td>{{ $row->latitude }}</td>
						    	<td>{{ $row->longitude }}</td>
						    	<td>{{ $row->agent_id }}</td>
						    	<td>{{ $row->payment_method }}</td>
						    	<td>{{ $row->payment_link }}</td>
						    	<td>{{ $row->payment_date }}</td>
						    	<td>{{ $row->buy_by }}</td>
						    	<td>{{ $row->payment_total }}</td>
						    	<td>{{ $row->coupont_id }}</td>
						    	<td>{{ $row->payment_discount_code }}</td>
						    	<td>{{ $row->payment_discount }}</td>
						    	<td>{{ $row->payment_final }}</td>
						    	<td>{{ $row->order_weight }}</td>
						    	<td>{{ $row->order_distance }}</td>
						    	<td>{{ $row->delivery_status }}</td>
						    	<td>{{ $row->delivery_fee }}</td>
						    	<td>{{ $row->delivery_track }}</td>
						    	<td>{{ $row->delivery_time }}</td>
						    	<td>{{ $row->delivery_date }}</td>
						    	<td>{{ $row->order_time }}</td>
						    	<td>{{ $row->status }}</td>
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
