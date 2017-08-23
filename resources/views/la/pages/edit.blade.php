@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pages') }}">Page</a> :
@endsection
@section("contentheader_description", $page->$view_col)
@section("section", "Pages")
@section("section_url", url(config('laraadmin.adminRoute') . '/pages'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Pages Edit : ".$page->$view_col)

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
				{!! Form::model($page, ['route' => [config('laraadmin.adminRoute') . '.pages.update', $page->id ], 'method'=>'PUT', 'id' => 'page-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title_en')
					@la_input($module, 'title_tw')
					@la_input($module, 'banner')
					@la_input($module, 'intro_en')
					@la_input($module, 'intro_tw')
					@la_input($module, 'meta_title_en')
					@la_input($module, 'meta_title_tw')
					@la_input($module, 'meta_description_en')
					@la_input($module, 'meta_description_tw')
					@la_input($module, 'meta_keyword_en')
					@la_input($module, 'meta_keyword_tw')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pages') }}">Cancel</a></button>
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
	$("#page-edit-form").validate({
		
	});
});
</script>
@endpush
