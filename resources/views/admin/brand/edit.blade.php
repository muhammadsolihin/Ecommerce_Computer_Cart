@extends('admin.main')

@section('content')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Edit Brand
				</div>
				<div class="panel-body">
					<form action="{{route('brand.update',['id'=>$brand->id])}}" method="POST" enctype="multipart/form-data" role="form">
						{{method_field('PUT')}}
						{{csrf_field()}}					
						<div class="form-group">
							<label for="">brand</label>
							<input type="text" class="form-control" name="brand" placeholder="brand" value="{{$brand->brand}}">
						</div>
						<button type="submit" class="btn btn-primary">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection