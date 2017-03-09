<div>

<link rel="stylesheet" href="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
<link rel="stylesheet" href="{{ asset('assets/js/rickshaw/rickshaw.min.css')}}">
    <!-- Bottom Scripts -->
<script src="{{ asset('assets/js/gsap/main-gsap.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.js')}}"></script>
<script src="{{ asset('assets/js/joinable.js')}}"></script>
<script src="{{ asset('assets/js/resizeable.js')}}"></script>
<script src="{{ asset('assets/js/neon-api.js')}}"></script>
<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
<script src="{{ asset('assets/js/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('assets/js/rickshaw/vendor/d3.v3.js')}}"></script>
<script src="{{ asset('assets/js/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{ asset('assets/js/raphael-min.js')}}"></script>
<script src="{{ asset('assets/js/morris.min.js')}}"></script>
<script src="{{ asset('assets/js/toastr.js')}}"></script>
<script src="{{ asset('assets/js/neon-chat.js')}}"></script>
<script src="{{ asset('assets/js/neon-custom.js')}}"></script>
<script src="{{ asset('assets/js/neon-demo.js')}}"></script>

<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/js/neon-login.js')}}"></script>

@if(route('plots.index') == Request::url())

    <link rel="stylesheet" href="{{ asset('assets/js/datatables/responsive/css/datatables.responsive.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/js/select2/select2-bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/js/select2/select2.css')}}">

	<script src="{{ asset('assets/js/select2/select2.min.js')}}"></script>

	<script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('assets/js/datatables/TableTools.min.js')}}"></script>
	<script src="{{ asset('assets/js/dataTables.bootstrap.js')}}"></script>
	<script src="{{ asset('assets/js/datatables/jquery.dataTables.columnFilter.js')}}"></script>
	<script src="{{ asset('assets/js/datatables/lodash.min.js')}}"></script>
	<script src="{{ asset('assets/js/datatables/responsive/js/datatables.responsive.js')}}"></script>

	<script type="text/javascript">
		var responsiveHelper;
		var breakpointDefinition = {
		    tablet: 1024,
		    phone : 480
		};
		var tableContainer;

			jQuery(document).ready(function($)
			{
				tableContainer = $("#table-1");
				
				tableContainer.dataTable({
					"sPaginationType": "bootstrap",
					"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
					"bStateSave": true,
					

				    // Responsive Settings
				    bAutoWidth     : false,
				    fnPreDrawCallback: function () {
				        // Initialize the responsive datatables helper once.
				        if (!responsiveHelper) {
				            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
				        }
				    },
				    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				        responsiveHelper.createExpandIcon(nRow);
				    },
				    fnDrawCallback : function (oSettings) {
				        responsiveHelper.respond();
				    }
				});
				
				$(".dataTables_wrapper select").select2({
					minimumResultsForSearch: -1
				});
			});


			// Delete 



		function delete_plot(id){

			if( !confirm('Are you sure you want to delete ?')) {
                    return false;
             }

			var token = $("input[name='_token']").val();

            $.ajax(
	        {
	            url: "plots/"+id,
	            type: 'DELETE',
	            data: {
	                "id": id,
	                "_method": 'DELETE',
	                "_token": token,
	            },
	            success(data){
                     if(data == 'success'){

                     	location.reload("/plots");
                     }
	            }
	        });

		}
</script>

@endif

</div>

