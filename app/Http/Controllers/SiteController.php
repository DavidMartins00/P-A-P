<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index()
  {
      return view('site/index');
  }
  
  public function crude(){
    return view('site/crude');
  }

  public function menu(){
    return view('site/menu');
  }
}
