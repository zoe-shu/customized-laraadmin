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
    $('#contact a').css('color','#00c8b6');
  });
</script>
<div class="contact-page">
  <div class="other-banner" style="background-image:url('{{ \App\Models\Upload::find($content->banner)->path() }}')">
    <div class="top-layer"></div>
    <div class="title llagoon">
      {{$content->title}}
    </div>
  </div>
  <div class="page-content">
    <div class="page-left">
      <div class="left-container">
        <div class="sub-title lagoon">
          Head office
        </div>
        <div class="contact-info">
          <div class="info addr tgrey">
            <img src="" />{{ $content->addr }}
          </div>
          <div class="info phone tgrey">
            <img src="" />{{ $content->tel }}
          </div>
          <div class="info email tgrey">
            <img src="" />{{ $content->email }}
          </div>
          <div class="info time tgrey">
            <img src="" />{{ $content->open_hour }}
          </div>
        </div>
        <div id="contact-map"></div>
        <script>
        var style =
            [
               {
                   "featureType": "administrative",
                   "elementType": "labels.text.fill",
                   "stylers": [
                       {
                           "color": "#444444"
                       }
                   ]
               },
               {
                   "featureType": "landscape",
                   "elementType": "all",
                   "stylers": [
                       {
                           "color": "#f2f2f2"
                       }
                   ]
               },
               {
                   "featureType": "poi",
                   "elementType": "all",
                   "stylers": [
                       {
                           "visibility": "off"
                       }
                   ]
               },
               {
                   "featureType": "road",
                   "elementType": "all",
                   "stylers": [
                       {
                           "saturation": -100
                       },
                       {
                           "lightness": 45
                       }
                   ]
               },
               {
                   "featureType": "road.highway",
                   "elementType": "all",
                   "stylers": [
                       {
                           "visibility": "simplified"
                       }
                   ]
               },
               {
                   "featureType": "road.highway",
                   "elementType": "geometry.fill",
                   "stylers": [
                       {
                           "color": "#ffffff"
                       }
                   ]
               },
               {
                   "featureType": "road.arterial",
                   "elementType": "labels.icon",
                   "stylers": [
                       {
                           "visibility": "off"
                       }
                   ]
               },
               {
                   "featureType": "transit",
                   "elementType": "all",
                   "stylers": [
                       {
                           "visibility": "off"
                       }
                   ]
               },
               {
                   "featureType": "water",
                   "elementType": "all",
                   "stylers": [
                       {
                           "color": "#dde6e8"
                       },
                       {
                           "visibility": "on"
                       }
                   ]
               }
             ];
             function initMap() {
               var div = document.getElementById('contact-map');
               var map = new google.maps.Map(div, {
                 zoom: 16,
                 styles:style,
                 center: {lat: {{$content->map_lat}}, lng: {{$content->map_lon}} }
               });
               var image = '/assets/images/pin.png';
               var beachMarker = new google.maps.Marker({
                 position: {lat:  {{$content->map_lat}}, lng: {{$content->map_lon}} },
                 map: map,
                 icon: image
               });
           }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1QGt48hMqWRC967rAYPFt4teCiSWe1uM&callback=initMap"
        async defer></script>

      </div>
    </div>
    <div class="page-right">
      <div class="right-container">
        <div class="sub-title white">
          General enquiry, how can we help?
        </div>
        <div class="intro white">
          If you have a query please use the form below to send us message and we’ll get in touch shortly, our dedicated team are always happy to help.
        </div>
        <form id="contact-form" class="white">
          <input type="text" id="name-field" class="input-field" name="name" placeholder="*NAME" />
          <input type="text" id="email-field" class="input-field" name="email" placeholder="*EMAIL ADDRESS" />
          <input type="text" id="phone-field" class="input-field" name="phone" placeholder="*PHONE" />
          <textarea class="msg-field" name="msg" placeholder="*HOW CAN WE HELP YOU?" ></textarea>
          <a class="submit-btn white" href="">SUBMIT</a>
        </form>
      </div>
    </div>
  </div>
</div>
@include('template.footer')
