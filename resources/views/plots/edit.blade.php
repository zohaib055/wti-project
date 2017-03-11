@extends("layouts.main")

@section("content")

<form method="POST" action="{{route('plots.update', ['id' => $plot->id])}}" accept-charset="UTF-8" class="form-horizontal form-groups-bordered" enctype="multipart/form-data" >
                 
<input name="_method" type="hidden" value="PUT">

{{ csrf_field() }}


<div class="row">

<div class="panel-heading">
	<div class="panel-title">
		<h3>Update Member</h3>
	</div>
	
</div>




	<div class="col-md-6">


			
				    
				    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Member Name</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="names" value="{{$plot->names}}">
						</div>
					</div>

					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Address</label>
						
						<div class="col-sm-8">
							<textarea class="form-control"  name="address">{{$plot->address}}</textarea>
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Plot No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="plot" value="{{$plot->plot}}">
						</div>
					</div>

					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Remarks</label>
						
						<div class="col-sm-8">
							<textarea class="form-control"  name="remarks">{{$plot->address}}</textarea>
						</div>
					</div>

				

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Home No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="home_no" value="{{$plot->home_no}}">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Serial Number</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="serial_no" value="{{$plot->serial_no}}" >
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Registration No</label>
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="registration_no" value="{{$plot->registration_no}}">
						</div>
					</div>

                   <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Update Image</label>
						
						<div class="col-sm-8">
							<input type="file" class="form-control" name="image">


						</div>
					</div>
		
				
		

	
	</div>



	<div class="col-md-6">


	<div class="form-group">
		<label for="field-ta" class="col-sm-3 control-label">Cnic no : </label>
		
		<div class="col-sm-8">
				<input type="text" class="form-control" name="cnic_no" value="{{$plot->cnic_no}}">
		</div>
	</div>
	
	    <div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Contact No</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="contact_no" value="{{$plot->contact_no}}">
			</div>
		</div>


		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Plot Type</label>
			
			<div class="col-sm-8">
				<select name="size" class="form-control" required="required" id="size">


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
				<input type="text" class="form-control" name="status" value="{{$plot->status}}">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Dues</label>
			
			<div class="col-sm-8">
				<input type="text" class="form-control" name="dues" value="{{$plot->dues}}">
			</div>
		</div>

		<div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">Block</label>
			
			<div class="col-sm-8">
				<select name="block" class="form-control" required="required">
				    <option value="">select block</option>

				  @if($plot->block == "A")  
					<option value="A" checked>A</option>
					<option value="B" selected="selected">B</option>
				  @else
					<option value="A">A</option>
					<option value="B" selected="selected">B</option>
				  @endif
				</select>
			</div>
		</div>

		<div class="form-group">	

		   <label for="field-1" class="col-sm-3 col-sm-offset-1 control-label">Current Image</label>


			<div class="col-sm-8 col-sm-offset-4">

			  <img src="{{asset('assets/plot_images')}}/{{$plot->image}}" class="img-responsive" width="150" height="150">

			</div>
		</div>


	
	</div>


</div>

 <div class="row">

    <div class="col-md-6">

        <div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success">Update</button>
		</div>
	   </div>
    	
    </div>
 	
  </div>

</form>

<script type="text/javascript">
	
	$("#size > option").each(function(index,value){

         if(this.value == '{{$plot->size}}'){

         	   $(this).prop("selected",true);
         }

	});

</script>

@endsection