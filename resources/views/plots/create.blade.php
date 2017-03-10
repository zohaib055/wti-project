@extends("layouts.main")

@section("content")

<div class="row">
<form role="form" class="form-horizontal form-groups-bordered" action="{{route('plots.store')}}" method="post">
				{{ csrf_field() }}
	<div class="col-md-6">
			
				    
				    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Member Name</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="names">
						</div>
					</div>

					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Address</label>
						
						<div class="col-sm-8">
							<textarea class="form-control"  name="address"></textarea>
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Plot</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="plot">
						</div>
					</div>


					
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Reg</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="reg">
						</div>
					</div>
					
					
					
					

				


					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Remarks</label>
						
						<div class="col-sm-8">
							<textarea class="form-control"  name="remarks"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Status</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="status">
						</div>
					</div>

					

					


					



		
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-8">
							<button type="submit" class="btn btn-success">Create</button>
						</div>
					</div>
				
				
		

	
	</div>


	<div class="col-md-6">
	
	    <div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Contact No</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="contact_no">
			</div>
		</div>


		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Size</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="size">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Number</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="number">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Status</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="status">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Dues</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="dues">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Block</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="block">
			</div>
		</div>


	
	</div>

</form>
</div>


@endsection