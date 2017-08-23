<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App;

class AboutController extends Controller
{
  public function index()
  {
      $roleCount = \App\Role::count();
      if($roleCount != 0) {
        if($roleCount != 0) {
          $content = DB::table('abouts')->where('lang','1')->first();
          $tc_content = DB::table('abouts')->where('lang','2')->first();
          if(App::getLocale() == 'en'){
            //
          }elseif(App::getLocale() == 'zh-TW' && !empty($tc_content)){
            $content = $tc_content;
          }
          return view('base.about', compact('content'));
        }
      } else {
        return view('errors.error', [
          'title' => 'Migration not completed',
          'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
        ]);
      }
  }
}
