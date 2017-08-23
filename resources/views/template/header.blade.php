<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="title" content="@yield('meta_title')" />
    <meta name="description" content="@yield('meta_desc')" />
    <meta name="keywords" content="@yield('meta_key')" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/images/favicon.ico')}}" />
    <script type="text/javascript" src="{{asset('/assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('/assets/js/jquery.bxslider.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('/assets/js/aos.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/jquery.mCustomScrollbar.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/main.css')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:image" content="@yield('og_img')" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
      var touchsupport = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0)
        if (touchsupport){ // browser support touch
          document.documentElement.className += "touch"
        }
        jQuery(document).ready(function($)  {
        $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name="_token"]').attr('content') }
            });
        });
    </script>
  </head>
  <body>
    <header id="header" class="origin">
      <div id="header-wrap">
        <div class="logo">
          <a href="/">
            <img class="logo-white" src="{{asset('/assets/images/logo_white.svg')}}" />
            <img class="logo-green" src="{{asset('/assets/images/logo.svg')}}" />
          </a>
        </div>
        <div class="hamburger">
          menu
        </div>
        <div class="menu-wrap">
          <div class="menu-head">
            <div class="logo">
              <a href="/">
                <img class="logo-green for-mobile" src="{{asset('/assets/images/logo.svg')}}" />
              </a>
            </div>
            <div class="hamburger">
              menu
            </div>
          </div>

          <ul class="menu-list">
            @foreach($menus as $menu)
                <li id="{{$menu->permalink}}"><a href="/{{$menu->permalink}}">{{$menu->title}}</a></li>
            @endforeach
            <li id="login">
              <a href="">@lang('messages.login')</a>
            </li>
            <li id="signup" class="lagoon">
              <a href="">@lang('messages.sign up')</a>
            </li>
          </ul>
          <ul class="lang-list">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="<?php if(Lang::locale() == $localeCode){ echo "lang-color"; }else{ echo "llgrey"; } ?>">
                 <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                         {{ $properties['native'] }}
                 </a>
               </li>
            @endforeach
          </ul>
        </div>
      </div>
    </header>
<div class="content">
  <script>
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('#header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
        var scroll = $(window).scrollTop();
        var objectSelect = $(".content");
        var objectPosition = objectSelect.offset().top;
        if (scroll > objectPosition) {
            $("#header").addClass("change");
            $("#header").removeClass("origin");
        } else {
            $("#header").removeClass("change");
            $("#header").addClass("origin");
        }
    });
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    function hasScrolled() {
        var st = $(this).scrollTop();
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('#header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
          if(st + $(window).height() < $(document).height()) {
            $('#header').removeClass('nav-up').addClass('nav-down');
          }
        }
        lastScrollTop = st;
    }
    $(document).ready(function(){
      $('.hamburger').click(function(){
        $('.menu-wrap').toggleClass('active');
        $('.content').toggleClass('hide');
        $('#header').toggleClass('for-mobile');
      });
    });
  </script>
