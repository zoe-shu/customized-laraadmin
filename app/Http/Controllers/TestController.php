<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App;

class TestController extends Controller
{
  public function index()
  {
    $roleCount = \App\Role::count();
    if($roleCount != 0) {
      if($roleCount != 0) {
        $content = DB::table('testings')->first();
        return view('test.index', compact('content'));
      }
    } else {
      return view('errors.error', [
        'title' => 'Migration not completed',
        'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
      ]);
    }
  }
  public function detail($slug)
 {
   $roleCount = \App\Role::count();
   if($roleCount != 0) {
     if($roleCount != 0) {
       // for different language
      //  $content = DB::table('testings')->where('slug',$slug)->where('lang','1')->first();
      //  $tc_content = DB::table('testings')->where('url',$slug)->where('lang','2')->first();
       $content = DB::table('testings')->where('slug',$slug)->first();
       $tc_content = DB::table('testings')->where('slug',$slug)->first();
       if(App::getLocale() == 'en'){
         //
       }elseif(App::getLocale() == 'zh-TW' && $tc_content != ''){
         $content = $tc_content;
       }
       return view('test.detail', compact('content'));
     }
   } else {
     return view('errors.error', [
       'title' => 'Migration not completed',
       'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
     ]);
   }
 }
}
