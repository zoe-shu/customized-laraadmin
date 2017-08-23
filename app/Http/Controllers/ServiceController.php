<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App;

class ServiceController extends Controller
{
  public function index()
  {
      $roleCount = \App\Role::count();
      if($roleCount != 0) {
        if($roleCount != 0) {
          $content = DB::table('services')->where('lang','1')->first();
          $tc_content = DB::table('services')->where('lang','2')->first();
          $tags = DB::table('service_details')->where('lang','1')->get();
          $tc_tags = DB::table('service_details')->where('lang','2')->get();
          if(App::getLocale() == 'en'){
            //
          }elseif(App::getLocale() == 'zh-TW'){
            if(!empty($tc_content)){
              $content = $tc_content;
            }
            if(!empty($tc_tags)){
              $tags = $tc_tags;
            }
          }
          return view('base.services', compact('content','tags'));
        }
      } else {
        return view('errors.error', [
          'title' => 'Migration not completed',
          'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
        ]);
      }
  }
}
