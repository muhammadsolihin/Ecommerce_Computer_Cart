@extends('admin.main')

@section('content')
	{{-- <h1>Product</h1> --}}
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Product</h3>
		</div>
		<div class="panel-body">
			<a href="{{route('product.create')}}">
				<button type="submit" class="btn btn-primary">Tambah</button>
			</a>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Category</th>
							<th>Brand</th>
							<th>Type</th>
							<th>Price</th>
							<th>Image</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>sdc</td>
							<td>sdc</td>
							<td>sdc</td>
							<td>sdc</td>
							<td>sdc</td>
							<td>sdc</td>
							<td>sdc</td>
							<td>
								<a href="#">Edit</a>								
								<a href="#">Delete</a>								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection