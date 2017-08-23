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
    $('#services a').css('color','#00c8b6');
    $('.icon').click(function(){
      var id = '#sec-'+$(this).attr('id');
      $('html, body').animate({
          scrollTop: $(id).offset().top
      }, 1000);
    });
    $(window).scroll(function(event){
        var scroll = $(window).scrollTop();
        var objectSelect = $("#sec-0");
        var objectPosition = objectSelect.offset().top;
        if (scroll > objectPosition) {
            $(".icon-wrap").addClass("change");
            $(".icon-wrap").removeClass("origin");
        } else {
            $(".icon-wrap").removeClass("change");
            $(".icon-wrap").addClass("origin");
        }
    });
  });
</script>
<div class="services-page">
  <div class="other-banner" style="background-image:url('{{ \App\Models\Upload::find($content->banner)->path() }}')">
    <div class="top-layer"></div>
    <div class="title llagoon">
      {{$content->title}}
    </div>
  </div>
  <div class="page-content">
    <div class="icon-wrap">
      @foreach($tags as $key => $tag)
      <div class="serv-icon">
        <a class="icon" id="{{$key}}">
          <img class="o-img" src="/assets/images/icon{{$key}}.svg" />
          <img class="hover-img" src="/assets/images/icon{{$key}}_w.svg" />
        </a>
        <span class="lagoon">{{$tag->icon}}</span>
      </div>
      @endforeach
    </div>

    @foreach($tags as $key => $tag)
    <div class="section <?php echo $key%2 == 1 ? "sec-left" : "" ?>" id="sec-{{$key}}">
      <div class="sec-text" data-aos="fade-up">
        <!-- data-aos="<?php //echo $key%2 == 1 || $key%2 == 0 ? "fade-left" : "fade-right" ?>" -->
        <span class="sub-title lagoon">{{$tag->title}}</span>
        <div class="purple sec-content">
          {!! $tag->content !!}
        </div>
        <?php if(!empty($tag->link)){ echo "<a href=\"/$tag->link\" class=\"sec-link lagoon \"></a>"; } ?>
      </div>
      <div class="sec-img" data-aos="fade-up" style="background:url('{{ \App\Models\Upload::find($tag->img)->path() }}') center center / cover"></div>
      <!-- data-aos="<?php //echo $key%2 == 1 || $key%2 == 0 ? "fade-right" : "fade-left" ?>"  -->
    </div>
    @endforeach
  </div>
</div>

@include('template.footer')
