@section('title')
{{$content->meta_title}}
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
    $('body').addClass('project-body');
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
<?php
  $flag = "<span class=\"featured-flag\">Featured</span>";
?>
<div class="proj-page">
  <div class="filter">
    <div class="filter-container">
      <div class="f-box pd">
        <div class="f-cat">
          <img class="f-icon house" src="{{asset('/assets/images/searchbar_house.svg')}}" />@lang('messages.type')
        </div>
        <ul class="f-dropdown">
            <li class="f-dd-li">
              <label class="s-cb control control--checkbox">
                <input type="checkbox" name="type-all" id="type-any" value="all" />
                <div class="control__indicator option-service"></div>
              </label>
              <label class="f-label" for="type-any">@lang('messages.any')</label>
            </li>
            @foreach($projects as $project)
            <li class="f-dd-li">
              <label class="s-cb control control--checkbox">
                <input type="checkbox" name="type" id="type{{ $project->type_id }}" class="type-field" value="{{ $project->type_id }}" />
                <div class="control__indicator option-service"></div>
              </label>
              <label class="f-label" for="type{{ $project->type_id }}">{{ $project->type }}</label>
            </li>
            @endforeach
          </ul>
      </div>

      <div class="f-box pd">
        <div class="f-cat">
          <img class="f-icon dollar" src="{{asset('/assets/images/searchbar_dollar.svg')}}" />@lang('messages.price')
        </div>
        <ul class="f-dropdown">
          <div class="f-sub">
            @lang('messages.min')
            @foreach($fprices as $fprice)
            <li class="f-sub-btn" id="p-min" value="{{ $fprice->min_price }}">
              @lang('messages.any')
            </li>
            @endforeach
            <ul class="f-sub-dd dd-up">
              <?php
                foreach($fprices as $fprice){
                  $min = $fprice->min_price;
                  echo "<li class=\"f-sub-dd-li dlagoon\" value=\"".$min."\" >".trans('messages.any')."</li>";
                  echo "<li class=\"f-sub-dd-li p-min dlagoon\" value=\"".$min."\" >$".number_format($min, 0, '', ',')."</li>";
                  for($y=1; $y <= 4; $y++){
                    $new_price = $min + 100000*$y;
                    echo "<li class=\"f-sub-dd-li p-min dlagoon\" value=\"".$new_price."\">$".number_format($new_price, 0, '', ',')."</li>";
                  }
                }
              ?>
            </ul>
          </div>
          <div class="f-sub">
            @lang('messages.max')
            @foreach($fprices as $fprice)
            <li value="{{ $fprice->max_price }}" id="p-max" class="f-sub-btn">
              @lang('messages.any')
            </li>
            @endforeach
            <ul class="f-sub-dd">
              <?php
                foreach($fprices as $fprice){
                  $max = $fprice->max_price;
                  echo "<li class=\"f-sub-dd-li dlagoon\" value=\"".$max."\">$".trans('messages.any')."</li>";
                  for($y=4; $y >= 1; $y--){
                    $new_price = $max - 100000*$y;
                    echo "<li class=\"f-sub-dd-li p-max dlagoon\" value=\"".$new_price."\">$".number_format($new_price, 0, '', ',')."</li>";
                  }
                  echo "<li class=\"f-sub-dd-li p-max dlagoon\" value=\"".$max."\">$".number_format($max, 0, '', ',')."</li>";
                }
              ?>
            </ul>
          </div>
        </ul>
      </div>

      <div class="f-box pd">
        <div class="f-cat">
          <img class="f-icon bed" src="{{asset('/assets/images/searchbar_bed.svg')}}" />@lang('messages.bedroom')
        </div>
        <ul class="f-dropdown">
          <div class="f-sub">
            @lang('messages.min')
            @foreach($rooms as $room)
            <li value="{{ $room->min_room }}" id="r-min" class="f-sub-btn">
              @lang('messages.any')
            </li>
            @endforeach
            <ul class="f-sub-dd dd-up">
              <?php
                foreach($rooms as $room){
                  $min = $room->min_room;
                  echo "<li class=\"f-sub-dd-li dlagoon\" value=\"".$min."\">".trans('messages.any')."</li>";
                  echo "<li class=\"f-sub-dd-li r-min dlagoon\" value=\"".$min."\">".$min."</li>";
                  for($y=$min+1; $y <= $min+4; $y++){
                    echo "<li class=\"f-sub-dd-li r-min dlagoon\" value=\"".$y."\">".$y."</li>";
                  }
                }
              ?>
            </ul>
          </div>
          <div class="f-sub">
            @lang('messages.max')
            @foreach($rooms as $room)
            <li value="{{ $room->max_room }}" id="r-max" class="f-sub-btn">
              @lang('messages.any')
            </li>
            @endforeach
              <ul class="f-sub-dd">
                <?php
                  foreach($rooms as $room){
                    $max = $room->max_room;
                    echo "<li class=\"f-sub-dd-li dlagoon\" value=\"".$max."\">".trans('messages.any')."</li>";
                    for($y=4; $y >= 1; $y--){
                      $new_max = $max - $y;
                      echo "<li class=\"f-sub-dd-li r-max dlagoon\" value=\"".$new_max."\">".$new_max."</li>";
                    }
                    echo "<li class=\"f-sub-dd-li r-max dlagoon\" value=\"".$max."\">".$max."</li>";
                  }
                ?>
              </ul>
          </div>
        </ul>
      </div>

      <div class="f-box search">
        <div class="f-search">
          <a id="search-btn" class="search-btn"><img src="{{asset('/assets/images/searchbar_search.svg')}}" />Search</a>
        </div>
      </div>
      <script>
      $(document).ready(function(){
        $('.type-field').prop('checked', true);
        $('#type-any').prop('checked', true);
        $('#type-any').click(function(){
          if ($('.type-field:checked').length == $('.type-field').length) {
            $('.type-field').prop('checked', false);
          }else{
            $('.type-field').prop('checked', true);
            $('#type-any').prop('checked', true);
          }
        });
        $('.type-field').click(function(){
          $('#type-any').prop('checked', false);
        });
        $('.f-cat').click(function(){
          var parent = $(this).parent('.f-box.pd');
          if($(parent).hasClass('active')){
            $('.f-box.pd').removeClass('active');
            $('.f-sub').removeClass('active');
          }else{
            $('.f-box.pd').removeClass('active');
            $('.f-sub').removeClass('active');
            $(this).parent('.f-box.pd').addClass('active');
          }
        });
        $('.f-sub-btn').click(function(){
          $(this).parent('.f-sub').toggleClass('active');
        });
        $('.f-sub-dd-li').click(function(){
          var selected = $(this).parent('.f-sub-dd').parent('.f-sub').children('.f-sub-btn');
          var parent = $(this).parent('.f-sub-dd').parent('.f-sub');
          var text = $(this).text();
          var value = $(this).attr("value");
          $(selected).text(text);
          $(selected).attr("value", value);
          $(parent).removeClass('active');
        });
      });
      </script>
    </div>
  </div>

  <div class="p-left">
    <div id="map"></div>
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
        var data = {!! $json !!};
        var imgpath = {!! $allimgs !!}
        var gmarkers = [];
        // Multiple markers location, latitude, and longitude
          var markers = [];
          var infoWindowContent = [];
          var projimg = [];
          var projallimg = [];
          var typeicon = [];
          for (var i = 0; i < data.length; i++) {
            projimg[i] = JSON.parse(data[i].images);
            typeicon[i] = JSON.parse(data[i].type_icon);
            markers[i] = [];
            markers[i][0]=data[i].map_lat;
            markers[i][1]=data[i].map_lon;
            markers[i][2]=data[i].proj_title;
            markers[i][3]=data[i].type_id;
            markers[i][6]="{{asset('/assets/images/pin.svg')}}";
            markers[i][7]=data[i].id;
            var flag = '';
            if(data[i].featured == '1'){
              var flag = <?php echo "'".$flag."'" ; ?>;
              markers[i][6]= "{{asset('/assets/images/yellow_pin.png')}}";
            }
            for(x=0; x < projimg[i].length; x++){
              // console.log(' projimg[i][x]:'+ projimg[i][x]);
              for(j=0; j < imgpath.length; j++){
                if(imgpath[j][0] == projimg[i][x]){
                  projallimg[i] = imgpath[j][1];
                }
                if(imgpath[j][0] == projimg[i][0]){
                  markers[i][4]=imgpath[j][1];
                }
                else if(projimg[i][0] == null){
                  markers[i][4]='';
                }
                else if(imgpath[j][0] == typeicon[i]){
                  markers[i][5]=imgpath[j][1];
                }
              }
              // console.log('allimg:'+projallimg[i]);
            }

            infoWindowContent[i]='<div class="info-window">' +
            '<div class="info-img" style="background:url() center center / cover;">' +
            '<img src="'+markers[i][4]+'" />' +
            flag +
            '</div>' +
            '<h3 class="info-title dlagoon">' + markers[i][7]+data[i].proj_title + '</h3>' +
            '<p class="info-addr lgrey"><img class="addr-icon" src="/assets/images/pin_grey.svg" />' + data[i].address + '</p>' +
            '<p class="info-type dlagoon"> <img class="type-icon" src="' + markers[i][5] + '" />' + data[i].type + '</p>' +
            '</div>';
          }
        function initialize() {
          var map;
          var bounds = new google.maps.LatLngBounds();
          var mapOptions = {
              mapTypeId: 'satellite',
              mapTypeId: 'roadmap',
              styles: style,
              scrollwheel: true,
              panControl: false,
              zoomControl: true,
              mapTypeControl: true,
              scaleControl: false,
              streetViewControl: true,
              overviewMapControl: false,
              indoormaps: true
          };

          // Display a map on the web page
          map = new google.maps.Map(document.getElementById("map"), mapOptions);
          map.setTilt(50);

          // Add multiple markers to map
          var infoWindow = new google.maps.InfoWindow(), marker, i;

          // Place each marker on the map
          for( i = 0; i < markers.length; i++ ) {
              var position = new google.maps.LatLng(markers[i][0], markers[i][1]);
              bounds.extend(position);
              marker = new google.maps.Marker({
                  position: position,
                  map: map,
                  title: markers[i][2],
                  icon: markers[i][6],
                  animation: google.maps.Animation.DROP
              });
              gmarkers.push(marker);

              // Add info window to marker
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                      // infoWindow.setContent(infoWindowContent[i][0]);
                      infoWindow.setContent(infoWindowContent[i]);
                      infoWindow.open(map, marker);
                  }
              })(marker, i));

              // Center the map to fit all markers on the screen
              map.fitBounds(bounds);

            }
          // Set zoom level
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
              this.setZoom(14);
              google.maps.event.removeListener(boundsListener);
          });
      }

      function filterMap(data){
          for( i = 0; i < gmarkers.length; i++ ) {
            gmarkers[i].setVisible(false);
            for( j = 0; j < data.length; j++ ) {
              if(markers[i][7] == data[j] || data == 'all'){
                gmarkers[i].setVisible(true);
              }
            }
          }
      }
      // Load initialize function
      google.maps.event.addDomListener(window, 'load', initialize);
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1QGt48hMqWRC967rAYPFt4teCiSWe1uM&callback=initialize&libraries=places&sensor=false"
   async defer></script>
  </div>
  <div class="p-right" data-mcs-theme="minimal-dark">
  @foreach($projects as $project)
    @if($project->featured == 1)
      <div class="p-block p-featured">
        <div class="info-img">
          @if($project->images != '[]')
          <ul class="info-img-wrap">
            <?php
              $image_ids = json_decode($project->images);
            ?>
            @foreach($image_ids as $img_id)
              <li>
                <img src="{{ \App\Models\Upload::find($img_id)->path() }}" />
                <!-- <img src="http://placehold.it/1080x768.jpg" /> -->
              </li>
            @endforeach
          </ul>
          @endif
          {!! $flag !!}
        </div>
        <div class="p-info">
          <div class="p-row info">
            <a href="{{\Request::url()}}/{{$project->url}}"><h3 class="info-title dlagoon">{{$project->proj_title}}</h3></a>
            <div class="addr-type">
              <p class="info-addr lgrey"><img class="addr-icon" src="/assets/images/pin_grey.svg" />{{$project->address}}</p>
              <p class="info-type dlagoon">
                @if(!empty($project->type_icon))
                <img class="type-icon" src="{{ \App\Models\Upload::find($project->type_icon)->path() }}" />
                @endif
                {{$project->type}}
              </p>
            </div>
          </div>
          @foreach($prices as $price)
            <?php
              $price_ids = json_decode($price->property_id);
            ?>
            @foreach($price_ids as $price_id)
              @if($project->id == $price_id)
              <div class="p-row price dlagoon">
                $<?php echo number_format($price->price_from, 0, '', ','); ?> -
                $<?php echo number_format($price->price_to, 0, '', ','); ?>
                <span class="p-room"><img src="{{asset('/assets/images/bed.svg')}}" />{{ $price->rooms }}</span>
              </div>
              @endif
            @endforeach
          @endforeach
        </div>
      </div>
      @endif
    @endforeach

    @foreach($projects as $project)
      @if($project->featured == 0)
      <div class="p-block">
        <div class="info-img">
          @if($project->images != '[]')
          <ul class="info-img-wrap">
            <?php
              $image_ids = json_decode($project->images);
            ?>
            @foreach($image_ids as $img_id)
              <li>
                <img src="{{ \App\Models\Upload::find($img_id)->path() }}" />
                <!-- <img src="http://placehold.it/1080x768.jpg" /> -->
              </li>
            @endforeach
          </ul>
          @endif
        </div>
        <div class="p-info">
          <div class="p-row info">
            <a href="{{\Request::url()}}/{{$project->url}}"><h3 class="info-title dlagoon">{{$project->proj_title}}</h3></a>
            <div class="addr-type">
              <p class="info-addr lgrey"><img class="addr-icon" src="/assets/images/pin_grey.svg" />{{$project->address}}</p>
              <p class="info-type dlagoon">
                @if(!empty($project->type_icon))
                <img class="type-icon" src="{{ \App\Models\Upload::find($project->type_icon)->path() }}" />
                @endif
                {{$project->type}}
              </p>
            </div>
          </div>
          @foreach($prices as $price)
            <?php
              $price_ids = json_decode($price->property_id);
            ?>
            @foreach($price_ids as $price_id)
              @if($project->id == $price_id)
              <div class="p-row price dlagoon">
                $<?php echo number_format($price->price_from, 0, '', ','); ?> -
                $<?php echo number_format($price->price_to, 0, '', ','); ?>
                <span class="p-room"><img src="{{asset('/assets/images/bed.svg')}}" />{{ $price->rooms }}</span>
              </div>
              @endif
            @endforeach
          @endforeach
        </div>
      </div>
      @endif
    @endforeach
  </div>

</div>
<script>
    (function($){
        $(window).on("load",function(){
            $(".p-right").mCustomScrollbar();
        });
    })(jQuery);
</script>
<script>
  // google.maps.event.addDomListener($('#search-btn'), 'click', filterMap);
  $(document).ready(function(){
    $('.info-img-wrap').bxSlider({
        controls:true,
        pager:false,
        nextText:'<img class="img-controls" id="i-next" src="/assets/images/right_arrow.svg" />',
        prevText:'<img class="img-controls" id="i-prev" src="/assets/images/left_arrow.svg" />'
    });
    $('#search-btn').click(function(){
      $('.f-box.pd').removeClass('active');
      $('.f-sub').removeClass('active');
      if ($('.type-field:checked').length == 0) {
        $('.type-field').prop('checked', true);
        $('#type-any').prop('checked', true);
        console.log('types log'+types);
      }
      if ($('.type-field:checked').length == $('.type-field:checked').length) {
        $('#type-any').prop('checked', true);
      }
      var types = [];
      var i = 0;
      $('input[name="type"]:checked').each(function() {
        //  console.log(this.value);
         types[i] = this.value;
         i++;
      });
      var pmin = $('#p-min').attr("value");
      var pmax = $('#p-max').attr("value");
      var rmin = $('#r-min').attr("value");
      var rmax = $('#r-max').attr("value");
      console.log('types: '+types+' pmin: '+pmin+' pmax: '+pmax+' rmin: '+rmin+' rmax: '+rmax)
      // console.log(types);
      $.ajax({
        type:'post',
        url:'/ajax',
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{types: types, pmin: pmin, pmax:pmax, rmin:rmin, rmax:rmax},
        success:function(data){
          console.log('filtered pin '+data);

          filterMap(data);
        }
      });
    });
  });
</script>
@include('template.footer')
