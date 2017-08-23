@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/project_prices') }}">Project price</a> :
@endsection
@section("contentheader_description", $project_price->$view_col)
@section("section", "Project prices")
@section("section_url", url(config('laraadmin.adminRoute') . '/project_prices'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Project prices Edit : ".$project_price->$view_col)

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

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($project_price, ['route' => [config('laraadmin.adminRoute') . '.project_prices.update', $project_price->id ], 'method'=>'PUT', 'id' => 'project_price-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'property_id')
					@la_input($module, 'price_from')
					@la_input($module, 'price_to')
					@la_input($module, 'rooms')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/project_prices') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#project_price-edit-form").validate({
		
	});
});
</script>
@endpush
