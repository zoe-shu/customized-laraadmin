<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Project_detail;
use DB;
use App;

class ProjectDetailController extends Controller
{
  public function detail($slug)
 {
   $roleCount = \App\Role::count();
   if($roleCount != 0) {
     if($roleCount != 0) {
       $content = DB::table('project_details')->where('url',$slug)->where('lang','1')->first();
       $tc_content = DB::table('project_details')->where('url',$slug)->where('lang','2')->first();
       if(App::getLocale() == 'en'){
         //
       }elseif(App::getLocale() == 'zh-TW' && !empty($tc_content)){
         $content = $tc_content;
       }
       return view('project.detail', compact('content'));
     }
   } else {
     return view('errors.error', [
       'title' => 'Migration not completed',
       'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
     ]);
   }
 }
}
