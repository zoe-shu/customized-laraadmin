<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Session;
use App;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $roleCount = \App\Role::count();
    		if($roleCount != 0) {
    			if($roleCount != 0) {
            // $menus = DB::table('frontend_menuses')->where('lang','1')->get();
            // $tc_menus = DB::table('frontend_menuses')->where('lang','2')->get();
            $content = DB::table('homes')->where('lang','1')->first();
            $tc_content = DB::table('homes')->where('lang','2')->first();
            $projects = DB::table('project_details')->where('lang','1')->count();
            if(App::getLocale() == 'en'){
              //
            }elseif(App::getLocale() == 'zh-TW'){
              if(!empty($tc_content)){
                $content = $tc_content;
              }
              // if(!empty($tc_menus)){
              //   $menus = $tc_menus;
              // }
            }
            return view('base.index', compact('content', 'projects'));
    			}
    		} else {
    			return view('errors.error', [
    				'title' => 'Migration not completed',
    				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
    			]);
    		}
    }
}
