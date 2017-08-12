<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
  public function index()
  {
    $roleCount = \App\Role::count();
    if($roleCount != 0) {
      if($roleCount != 0) {
        return view('test');
      }
    } else {
      return view('errors.error', [
        'title' => 'Migration not completed',
        'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
      ]);
    }
  }
}
