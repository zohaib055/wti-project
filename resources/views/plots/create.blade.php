@extends("layouts.main")

@section("content")

<div class="row">

<div class="panel-heading">
	<div class="panel-title">
		<h3>Add Member</h3>
	</div>
	
</div>

<form role="form" class="form-horizontal form-groups-bordered" action="{{route('plots.store')}}" method="post" enctype="multipart/form-data">
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
						<label for="field-1" class="col-sm-3 control-label">Plot No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="plot">
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
						<label for="field-1" class="col-sm-3 control-label">Home No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="home_no">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Serial Number</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="serial_no">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Registration No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="registeration_no">
						</div>
					</div>

                   <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Upload Image</label>
						
						<div class="col-sm-8">
							<input type="file" class="form-control" name="image">
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
		<label for="field-ta" class="col-sm-3 control-label">Cnic no : </label>
		
		<div class="col-sm-8">
				<input type="text" class="form-control" name="cnic_no">
		</div>
	</div>
	
	    <div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Contact No</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="contact_no">
			</div>
		</div>


		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Plot Type</label>
			
			<div class="col-sm-8">
				<select name="size" class="form-control" required="required">
				    <option value="">select size</option>
					<option value="25 x 60">25 X 60</option>
					<option value="30 x 60">30 X 60</option>
					<option value="35 x 70">35 X 70</option>
					<option value="40 x 80">40 X 80</option>
					<option value="50 x 90">50 X 90</option>
					<option value="60 x 90">60 X 90</option>
					<option value="80 x 120">80 X 120</option>
					<option value="90 x 120">90 X 120</option>
				</select>
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
				<select name="block" class="form-control" required="required">
				    <option value="">select block</option>
					<option value="A">A</option>
					<option value="B">B</option>
				</select>
			</div>
		</div>


	
	</div>

</form>
</div>


@endsection