@extends("layouts.main")

@section("content")

<div class="row">

<div class="panel-heading">
	<div class="panel-title">
		<h3>View Member</h3>
	</div>
	
</div>


<form  class="form-horizontal form-groups-bordered"  >
                 


	<div class="col-md-6">


			
				    
				    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Member Name</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="names" value="{{$plot->names}}" disabled>
						</div>
					</div>

					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Address</label>
						
						<div class="col-sm-8">
							<textarea class="form-control" disabled  name="address">{{$plot->address}}</textarea>
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Plot No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="plot" value="{{$plot->plot}}" disabled>
						</div>
					</div>

					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Remarks</label>
						
						<div class="col-sm-8">
							<textarea class="form-control" disabled name="remarks">{{$plot->address}}</textarea>
						</div>
					</div>

				

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Home No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" disabled name="home_no" value="{{$plot->home_no}}">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Serial Number</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" disabled name="serial_no" value="{{$plot->serial_no}}" >
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Registration No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" disabled name="registration_no" value="{{$plot->registration_no}}">
						</div>
					</div>


	
	</div>



	<div class="col-md-6">


	<div class="form-group">
		<label for="field-ta" class="col-sm-3 control-label">Cnic no : </label>
		
		<div class="col-sm-8">
				<input type="text" class="form-control" disabled name="cnic_no" value="{{$plot->cnic_no}}">
		</div>
	</div>
	
	    <div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Contact No</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" disabled name="contact_no" value="{{$plot->contact_no}}">
			</div>
		</div>


		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Plot Type</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" disabled name="size" value="{{$plot->plot}}">

			</div>
		</div>

		
		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Status</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" disabled name="status" value="{{$plot->status}}">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Dues</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" disabled name="dues" value="{{$plot->dues}}">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Block</label>
			
			<div class="col-sm-8">
					<input type="text" class="form-control" disabled name="block" value="{{$plot->block}}">

			</div>
		</div>

		<div class="form-group">	

		   <label for="field-1" class="col-sm-3 col-sm-offset-1 control-label">Image</label>


			<div class="col-sm-8 col-sm-offset-4">

			  <img src="{{asset('assets/plot_images')}}/{{$plot->image}}" class="img-responsive" width="150" height="150">

			</div>
		</div>


	
	</div>

</form>
</div>

<script type="text/javascript">
	
	$("#size > option").each(function(index,value){

         if(this.value == '{{$plot->size}}'){

         	   $(this).prop("selected",true);
         }

	});

</script>

@endsection