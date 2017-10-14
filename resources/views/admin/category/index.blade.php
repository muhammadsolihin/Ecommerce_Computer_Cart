@extends('admin.main')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Category</h3>
		</div>
		<div class="panel-body">
			<a href="{{route('category.create')}}">
				<button type="submit" class="btn btn-primary">Tambah</button>
			</a>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Category</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($categories as $category)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$category->category}}</td>
							<td>
								<a href="{{route('category.edit',['id'=>$category->id])}}">
									<button type="button" class="btn btn-success">edit</button>
								</a>
								<form action="{{ route('category.destroy',['id'=>$category->id]) }}" method="POST" role="form" style="display: inline;">		
									{{csrf_field()}}	
									{{method_field('DELETE')}}				
									<button onClick="return confirm('Anda yakin akan menghapus {{$category->category}}')" type="submit" class="btn btn-success">delete</button>
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