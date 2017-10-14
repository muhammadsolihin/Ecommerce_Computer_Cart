@extends('admin.main')

@section('content')
	{{-- <h1>Add Product</h1> --}}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Edit Category
				</div>
				<div class="panel-body">
					<form action="{{route('category.update',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data" role="form">
						{{method_field('PUT')}}
						{{csrf_field()}}					
						<div class="form-group">
							<label for="">Category</label>
							<input type="text" class="form-control" name="category" placeholder="Category" value="{{$category->category}}">
						</div>
						<button type="submit" class="btn btn-primary">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection