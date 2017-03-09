@extends("layouts.main")

@section("content")

<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Password</h3>
				</div>
				
			</div>
			
			<div class="panel-body">
				
				<div class="panel-body">
				
				<form method="POST" action="{{route('update-password')}}"  class="form-horizontal form-groups-bordered">
                 

				{{ csrf_field() }}
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Current Password</label>
						
						<div class="col-sm-5">
							<input type="password" class="form-control" name="current_password">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">New Password</label>
						
						<div class="col-sm-5">
							<input type="password" class="form-control" name="new_password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-success">Update</button>
						</div>
					</div>

				
				</form>
				
			</div>
		
		</div>
	
	</div>
</div>


@endsection