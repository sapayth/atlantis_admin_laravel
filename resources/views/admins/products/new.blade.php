@extends('admins.master')

@section('content')
<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">New Product</h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="col-md-12">
									<div class="form-group">
										<label>Title</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control"></textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="card-action">
						<button class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h1></h1>
</div>
@endsection