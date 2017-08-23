@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/service_details') }}">Service detail</a> :
@endsection
@section("contentheader_description", $service_detail->$view_col)
@section("section", "Service details")
@section("section_url", url(config('laraadmin.adminRoute') . '/service_details'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Service details Edit : ".$service_detail->$view_col)

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
				{!! Form::model($service_detail, ['route' => [config('laraadmin.adminRoute') . '.service_details.update', $service_detail->id ], 'method'=>'PUT', 'id' => 'service_detail-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'lang')
					@la_input($module, 'icon')
					@la_input($module, 'title')
					@la_input($module, 'content')
					@la_input($module, 'img')
					@la_input($module, 'link')
					@la_input($module, 'sort')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/service_details') }}">Cancel</a></button>
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
	$("#service_detail-edit-form").validate({
		
	});
});
</script>
@endpush
