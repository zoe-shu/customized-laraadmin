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
<!-- @lang('messages.welcome') -->
<div class="home-page">
  <!-- <div class="banner" style="background:url('{{-- \App\Models\Upload::find($content->banner)->path() --}}') center center / cover"> -->
  <div class="banner" style="background-image:url('assets/images/hp_map_n.jpg')">
    <div class="top-layer" ></div>
    <div class="title">
      <p class="dlagoon"><span class="lagoon" id="proj-count">0</span> @lang('messages.current projects')</p>
      <a class="login-btn white" href="">@lang('messages.login')</a>
    </div>

    <a class="scroll-btn">
      <div class="line"></div>
      <span class="lagoon">@lang('messages.scroll')</span>
    </a>
    <script>
      $(document).ready(function(){
        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
        $('#proj-count').animateNumber(
          {
            number: {{ $projects }},
            numberStep: comma_separator_number_step
          }
        );
        $('.scroll-btn').click(function(){
          $('html, body').animate({
              scrollTop: $("#page-content").offset().top
          }, 1000);
        });
      });
    </script>
  </div>
  <div class="page-content" id="page-content">
    <div class="section" id="abt-sec" data-aos="fade-up">
      <div class="sec-img" style="background:url('{{ \App\Models\Upload::find($content->abt_img)->path() }}') no-repeat center center / cover">
        <!-- <div class="layer"></div> -->
        <span class="lagoon">{{$content->abt_slogan}}</span>
      </div>
      <div class="sec-text">
        <p class="purple">
          {{$content->abt_content}}
        </p>
        <a href="about" class="white">@lang('messages.more about us')</a>
      </div>
    </div>

    <div class="section" id="serv-sec" data-aos="fade-up">
      <div class="sec-text">
        <p class="purple">
          {{$content->serv_content}}
        </p>
        <a href="services" class="white">@lang('messages.more services')</a>
      </div>
      <div class="sec-img" style="background:url('{{ \App\Models\Upload::find($content->serv_img)->path() }}') center center / cover">
      </div>
    </div>
  </div>

</div>
@include('template.footer')
