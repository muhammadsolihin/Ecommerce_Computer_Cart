@extends('admin.main')

@section('content')
	{{-- <h1>Add Product</h1> --}}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Add Category
				</div>
				<div class="panel-body">
					<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" role="form">
						{{csrf_field()}}					
						<div class="form-group">
							<label for="">Category</label>
							<input type="text" class="form-control" name="category" placeholder="Category">
						</div>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection