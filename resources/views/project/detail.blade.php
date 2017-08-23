@section('title')
{{$content->proj_title}}
@endsection
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
    $('#projects a').css('color','#00c8b6');
    $('body').addClass('project-detail-body');
    $("#header").addClass("change");
    $("#header").removeClass("origin");
  });
  $(window).scroll(function(event){
      var scroll = $(window).scrollTop();
      var objectSelect = $(".content");
      var objectPosition = objectSelect.offset().top;
      if (scroll > objectPosition) {
          $("#header").addClass("change");
          $("#header").removeClass("origin");
      } else {
          $("#header").addClass("change");
          $("#header").removeClass("origin");
      }
  });
</script>
<div class="p-detail-page">
  {{$content->summary}}

  <div id="map"></div>
  <script>
    function initMap() {
      // Create a map object and specify the DOM element for display.
      // var style = ;
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.866995, lng: 151.205845},
        scrollwheel: true,
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        mapTypeId: google.maps.MapTypeId.ROADMAP

        // styles: style
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1QGt48hMqWRC967rAYPFt4teCiSWe1uM&callback=initMap"
  async defer></script>

</div>

@include('template.footer')
