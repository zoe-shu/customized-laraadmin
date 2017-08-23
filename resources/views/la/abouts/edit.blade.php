@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/abouts') }}">About</a> :
@endsection
@section("contentheader_description", $about->$view_col)
@section("section", "Abouts")
@section("section_url", url(config('laraadmin.adminRoute') . '/abouts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Abouts Edit : ".$about->$view_col)

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
				{!! Form::model($about, ['route' => [config('laraadmin.adminRoute') . '.abouts.update', $about->id ], 'method'=>'PUT', 'id' => 'about-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'lang')
					@la_input($module, 'banner')
					@la_input($module, 'title')
					@la_input($module, 'intro')
					@la_input($module, 'connect')
					@la_input($module, 'connect_img')
					@la_input($module, 'people')
					@la_input($module, 'people_slogan')
					@la_input($module, 'people_img')
					@la_input($module, 'case')
					@la_input($module, 'case_img')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_desc')
					@la_input($module, 'meta_key')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/abouts') }}">Cancel</a></button>
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
	$("#about-edit-form").validate({
		
	});
});
</script>
@endpush
