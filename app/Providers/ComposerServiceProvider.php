<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use APP;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
      // Using Closure based composers
      view()->composer('template.header', function ($view)
      {
        $menus = DB::table('frontend_menuses')->where('lang','1')->get();
        $tc_menus = DB::table('frontend_menuses')->where('lang','2')->get();
        if(App::getLocale() == 'en'){
          //
        }elseif(App::getLocale() == 'zh-TW')
        {
          if(!isset($tc_menus))
          {
            $menus = $tc_menus;
          }
        }
        $view->menus = $menus;
      });
      view()->composer('template.footer', function ($view)
      {
        $menus = DB::table('frontend_menuses')->where('lang','1')->get();
        $tc_menus = DB::table('frontend_menuses')->where('lang','2')->get();
        if(App::getLocale() == 'en'){
          //
        }elseif(App::getLocale() == 'zh-TW')
        {
          if(!isset($tc_menus))
          {
            $menus = $tc_menus;
          }
        }
        $view->menus = $menus;
      });
    }

    public function register()
    {
        //
    }
}
