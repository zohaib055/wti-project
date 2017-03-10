@extends("layouts.main")


@section("content")

<h3>All Plots</h3>


<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th data-hide="phone">Serial No</th>
			<th>Plot No</th>
			<th data-hide="phone">Registration No</th>
			<th data-hide="phone,tablet">Name</th>
			<th>CNIC NO</th>
			<th>Address</th>
			<th>Contact No</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
	@forelse($plots as $plot)
		<tr class="gradeU">
			<td>{{ $plot->serial_no }}</td>
			<td>{{ $plot->plot }}</td>
			<td>{{ $plot->registration_no }}</td>
			<td>{{ $plot->names }}</td>
			<td>{{ $plot->cnic_no }}</td>
			<td>{{ $plot->address }}</td>
			<td>{{ $plot->contact_no }}</td>
			<td>
				
              <a href="{{route('plots.edit', ['id' => $plot->id])}}" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
			  </a>

			  <a href="javascript:delete_plot({{$plot->id}});" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
			  </a>

			  <a href="{{route('plots.show', ['id' => $plot->id])}}" class="btn btn-success btn-sm btn-icon icon-left">
					<i class="entypo-eye"></i>
					View
			 </a>


			</td>
		</tr>
	@empty

   

	@endforelse
	</tbody>
	
</table>
{{ csrf_field() }}

@endsection