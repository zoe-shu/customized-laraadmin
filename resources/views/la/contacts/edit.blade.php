@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contacts') }}">Contact</a> :
@endsection
@section("contentheader_description", $contact->$view_col)
@section("section", "Contacts")
@section("section_url", url(config('laraadmin.adminRoute') . '/contacts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contacts Edit : ".$contact->$view_col)

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
				{!! Form::model($contact, ['route' => [config('laraadmin.adminRoute') . '.contacts.update', $contact->id ], 'method'=>'PUT', 'id' => 'contact-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'lang')
					@la_input($module, 'banner')
					@la_input($module, 'title')
					@la_input($module, 'addr')
					@la_input($module, 'tel')
					@la_input($module, 'email')
					@la_input($module, 'open_hour')
					@la_input($module, 'map_lat')
					@la_input($module, 'map_lon')
					@la_input($module, 'form_receiver')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_desc')
					@la_input($module, 'meta_key')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contacts') }}">Cancel</a></button>
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
	$("#contact-edit-form").validate({
		
	});
});
</script>
@endpush
