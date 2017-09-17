@extends("la.layouts.app")

@section("contentheader_title", "Testings")
@section("contentheader_description", "Testings listing")
@section("section", "Testings")
@section("sub_section", "Listing")
@section("htmlheader_title", "Testings Listing")

@section("headerElems")
@la_access("Testings", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Testing</button>
@endla_access
@endsection

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Testings", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Testing</h4>
			</div>
			{!! Form::open(['action' => 'LA\TestingsController@store', 'id' => 'testing-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                    @la_form($module)
					
					{{--
					@la_input($module, 'slug')
					@la_input($module, 'address')
					@la_input($module, 'checkbox')
					@la_input($module, 'currency')
					@la_input($module, 'date')
					@la_input($module, 'datetime')
					@la_input($module, 'decimal')
					@la_input($module, 'dropdown')
					@la_input($module, 'email')
					@la_input($module, 'file')
					@la_input($module, 'float')
					@la_input($module, 'html')
					@la_input($module, 'image')
					@la_input($module, 'integer')
					@la_input($module, 'mobile')
					@la_input($module, 'multiselect')
					@la_input($module, 'name')
					@la_input($module, 'password')
					@la_input($module, 'radio')
					@la_input($module, 'string')
					@la_input($module, 'taginput')
					@la_input($module, 'textarea')
					@la_input($module, 'textfield')
					@la_input($module, 'url')
					@la_input($module, 'multi_file')
					--}}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/testing_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#testing-add-form").validate({
		
	});
});
</script>
@endpush
