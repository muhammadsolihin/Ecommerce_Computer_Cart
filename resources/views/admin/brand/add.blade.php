@extends('admin.main')

@section('content')
	{{-- <h1>Add Product</h1> --}}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Add Brand
				</div>
				<div class="panel-body">
					<form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data" role="form">
						{{csrf_field()}}					
						<div class="form-group">
							<label for="">brand</label>
							<input type="text" class="form-control" name="brand" placeholder="brand">
						</div>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection