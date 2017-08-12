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
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/main.css')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:image" content="@yield('og_img')" />
    <script>
      var touchsupport = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0)
      if (touchsupport){ // browser support touch
        document.documentElement.className += "touch"
      }
    </script>
  </head>
  <body>
    <header>
      <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
             <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                     {{ $properties['native'] }}
             </a>
           </li>
        @endforeach
      </ul>
    </header>
