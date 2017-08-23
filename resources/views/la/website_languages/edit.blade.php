@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/website_languages') }}">Website language</a> :
@endsection
@section("contentheader_description", $website_language->$view_col)
@section("section", "Website languages")
@section("section_url", url(config('laraadmin.adminRoute') . '/website_languages'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Website languages Edit : ".$website_language->$view_col)

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
				{!! Form::model($website_language, ['route' => [config('laraadmin.adminRoute') . '.website_languages.update', $website_language->id ], 'method'=>'PUT', 'id' => 'website_language-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'lang')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/website_languages') }}">Cancel</a></button>
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
	$("#website_language-edit-form").validate({
		
	});
});
</script>
@endpush
