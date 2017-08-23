@section('meta_title')
{{$content->meta_title}}
@endsection
@section('meta_desc')
{{$content->meta_desc}}
@endsection
@section('meta_key')
{{$content->meta_key}}
@endsection

@include('template.header')
<script>
  $(document).ready(function(){
    $('#about a').css('color','#00c8b6');
  });
</script>
<div class="about-page">
  <div class="other-banner" style="background-image:url('{{ \App\Models\Upload::find($content->banner)->path() }}')">

    <div class="top-layer"></div>
    <div class="title llagoon">
      {{$content->title}}
    </div>
  </div>
  <div class="page-content">
    <div class="intro purple">
      {{ $content->intro }}
    </div>

    <div class="section" data-aos="fade-up">
      <div class="sec-img" style="background:url('{{-- \App\Models\Upload::find($content->connect_img)->path() --}}') center center / cover">
        <div class="layer"></div>
      </div>
      <div class="sec-text">
        <div class="sub-title purple">
          @lang('messages.our value')
          <span class="lagoon">@lang('messages.connect')</span>
        </div>
        <p class="purple">
          {{$content->connect}}
        </p>
      </div>
    </div>

    <div class="section" data-aos="fade-up">
      <div class="sec-img i-left" style="background:url('{{-- \App\Models\Upload::find($content->people_img)->path() --}}') center center / cover">
        <div class="layer"></div>
        <span class="lagoon">{{$content->people_slogan}}</span>
      </div>
      <div class="sec-text t-left">
        <div class="sub-title purple">
          @lang('messages.tailored service')
          <span class="lagoon">@lang('messages.people')</span>
        </div>
        <p class="purple">
          {{$content->people}}
        </p>
      </div>
    </div>

    <div class="section" data-aos="fade-up">
      <div class="sec-img" style="background:url('{{-- \App\Models\Upload::find($content->case_img)->path() --}}') center center / cover">
        <div class="layer"></div>
      </div>
      <div class="sec-text">
        <div class="sub-title purple">
          @lang('messages.result driven')
          <span class="lagoon">@lang('messages.case study')</span>
        </div>
        <p class="purple">
          {{$content->case}}
        </p>
      </div>
    </div>
  </div>

</div>
@include('template.footer')
