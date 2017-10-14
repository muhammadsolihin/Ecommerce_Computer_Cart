@extends('admin.main')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Brand</h3>
		</div>
		<div class="panel-body">
			<a href="{{route('brand.create')}}">
				<button type="submit" class="btn btn-primary">Tambah</button>
			</a>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Brand</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($brands as $brand)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$brand->brand}}</td>
							<td>
								<a href="{{route('brand.edit',['id'=>$brand->id])}}">
									<button type="button" class="btn btn-success">edit</button>
								</a>
								<form action="{{ route('brand.destroy',['id'=>$brand->id]) }}" method="POST" role="form" style="display: inline;">		
									{{csrf_field()}}	
									{{method_field('DELETE')}}				
									<button onClick="return confirm('Anda yakin akan menghapus {{$brand->brand}}')" type="submit" class="btn btn-success">delete</button>
								</form>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>	
		</div>
	</div>
@endsection