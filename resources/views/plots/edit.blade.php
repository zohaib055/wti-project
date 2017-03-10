@extends("layouts.main")

@section("content")

<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Update Plot
				</div>
				
			</div>
			
			<div class="panel-body">
				
				<div class="panel-body">
				
				<form method="POST" action="{{route('plots.update', ['id' => $plot->id])}}" accept-charset="UTF-8" class="form-horizontal form-groups-bordered"><input name="_method" type="hidden" value="PUT">
                 
                <input name="_method" type="hidden" value="PUT">

				{{ csrf_field() }}
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Plot</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="plot" value="{{ $plot->plot}}">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Size</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="size" value="{{$plot->size}}">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Number</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="number" value="{{$plot->number}}">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Reg</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="reg" value="{{ $plot->reg}}">
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Address</label>
						
						<div class="col-sm-5">
							<textarea class="form-control"  name="address">{{ $plot->address}}</textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Contact No</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="contact_no" value="{{ $plot->contact_no}}">
						</div>
					</div>



					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Remarks</label>
						
						<div class="col-sm-5">
							<textarea class="form-control"  name="remarks">{{ $plot->remarks}}</textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Status</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="status" value="{{ $plot->status}}">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Dues</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="dues" value="{{ $plot->dues}}">
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Names</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="names" value="{{$plot->names}}">
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Block</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="block" value="{{$plot->block}}">
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