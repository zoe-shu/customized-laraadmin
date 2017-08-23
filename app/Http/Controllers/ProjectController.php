<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App;
use App\Models\Upload;

class ProjectController extends Controller
{
  public function index()
  {
      $roleCount = \App\Role::count();
      if($roleCount != 0) {
        if($roleCount != 0) {
          $imgids = DB::table('uploads')->select('id')->where('public','1')->where('deleted_at',NULL)->get();

          $i = 0;
          $allimgs = array();
          foreach($imgids as $imgid){
            $allimgs[$i] = array();
            $allimgs[$i][0] = $imgid->id;
            $allimgs[$i][1] = Upload::find($imgid->id)->path();
            $i++;
          }
          $allimgs = json_encode($allimgs);
          $imgs = DB::table('project_details')->select('images')->where('active','1')->get();
          $imgs = json_encode($imgs);
          $fprices = DB::table('project_prices')->select(DB::raw('min(price_from) as min_price, max(price_to) as max_price'))->get();
          $rooms = DB::table('project_prices')->select(DB::raw('max(rooms) as max_room, min(rooms) as min_room'))->get();
          // $rooms = DB::table('project_prices')->select('rooms')->orderBy('rooms')->get();
          $content = DB::table('projects')->where('lang','1')->first();
          $tc_content = DB::table('projects')->where('lang','2')->first();
          $prices = DB::table('project_prices')->get();
          // $f_projects = DB::table('project_details')->where('lang','1')->where('featured','1')->where('active','1')->get();
          // $tc_f_projects = DB::table('project_details')->where('lang','2')->where('featured','1')->where('active','1')->get();
          $projects = DB::table('project_details')
                          ->join('project_types', 'project_types.id', '=', 'project_details.type')
                          ->where('active','1')
                          ->where('lang','1')
                          ->select('project_details.*', 'project_types.type', 'project_types.id as type_id', 'project_types.icon as type_icon')
                          ->get();
          $tc_projects = DB::table('project_details')
                          ->join('project_types', 'project_types.id', '=', 'project_details.type')
                          ->where('active','1')
                          ->where('lang','2')
                          ->select('project_details.*', 'project_types.type', 'project_types.id as type_id')
                          ->get();
          // $prices = DB::table('project_prices')->select( DB::raw('min(rooms) as minrooms, max(rooms) as maxrooms'))->get();

          if(App::getLocale() == 'en'){
            //
          }elseif(App::getLocale() == 'zh-TW'){
            if(!empty($tc_content)){
              $content = $tc_content;
            }
            if(!empty($tc_projects)){
              $projects = $tc_projects;
            }
          }

          $json = json_encode($projects);
          return view('project.index', compact('content', 'projects', 'json', 'msg', 'rooms', 'imgs', 'fprices', 'allimgs','prices'));
        }
      } else {
        return view('errors.error', [
          'title' => 'Migration not completed',
          'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
        ]);
      }
  }

  public function ajax(Request $request){

    $types = $_POST["types"];
    $pmin = $_POST["pmin"];
    $pmax = $_POST["pmax"];
    $rmin = $_POST["rmin"];
    $rmax = $_POST["rmax"];
    $sql_result =  DB::table('project_prices')
                    ->select('property_id')
                    ->where('price_from','>=',$pmin)
                    ->where('price_to','<=',$pmax)
                    ->where('rooms','>=',$rmin)
                    ->where('rooms','<=',$rmax)
                    ->groupBy('property_id')
                    ->get();
    $result1 = array();
    for($i=0; $i < sizeof($sql_result); $i++){
      $val = $sql_result[$i]->property_id;
      $val = preg_replace("/[\"\]\[]/", "", $val);
      if (!in_array($val, $result1)){
        $result1[] = $val;
      }
    }
    $result = implode(",", $result1);
    $result = explode(",",$result);

    $typeArr = array();
    for($j=0; $j < sizeof($types); $j++){
      $typeArr[] = $types[$j];
    }
    $psql = DB::table('project_details')
          ->select('id')
          ->where('lang','1')
          ->where('active','1')
          ->whereIn('id',$result)
          ->whereIn('type',$typeArr)
          ->get();
    $result2 = array();
    for($y=0; $y < sizeof($psql); $y++){
      $val = $psql[$y]->id;
      $val = preg_replace("/[\"\]\[]/", "", $val);
      $result2[] = $val;
    }
    return $result2;
  }

}
