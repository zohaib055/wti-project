@extends("layouts.main")

@section("content")

<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
				 <h3>Update Plot</h3>
				</div>
				
			</div>
			
			<div class="panel-body">

			<form role="form" class="form-horizontal form-groups-bordered">
				
				
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Plot</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="plot" value="{{ $plot->plot}}" disabled="disabled">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Size</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="size" value="{{$plot->size}}" disabled="disabled">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Number</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="number" value="{{$plot->number}}" disabled="disabled">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Reg</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="reg" value="{{ $plot->reg}}" disabled="disabled">
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Address</label>
						
						<div class="col-sm-5">
							<textarea class="form-control"  name="address" disabled="disabled">{{ $plot->address}}</textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Contact No</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="contact_no" value="{{ $plot->contact_no}}" disabled="disabled">
						</div>
					</div>



					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Remarks</label>
						
						<div class="col-sm-5">
							<textarea class="form-control"  name="remarks" disabled="disabled">{{ $plot->remarks}}</textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Status</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="status" value="{{ $plot->status}}" disabled="disabled">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Dues</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="dues" value="{{ $plot->dues}}" disabled="disabled">
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Names</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="names" value="{{$plot->names}}" disabled="disabled">
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Block</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="block" value="{{$plot->block}}" disabled="disabled">
						</div>
					</div>

                 </form>
		
			</div>
		
		</div>
	
	</div>
</div>


@endsection