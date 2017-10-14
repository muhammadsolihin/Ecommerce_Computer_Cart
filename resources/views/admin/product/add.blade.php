@extends('admin.main')

@section('content')
	{{-- <h1>Add Product</h1> --}}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Add Product
				</div>
				<div class="panel-body">
					<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" role="form">
						{{csrf_field()}}
						{{-- <legend>Form title</legend> --}}
					
						<div class="form-group">
							<label for="">label</label>
							<input type="text" class="form-control" id="" placeholder="Input field">
						</div>
					
						
					
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection