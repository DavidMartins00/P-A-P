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
  
  public function add(){
    return view('user/register');
  }

  public function menu(){
    return view('site/menu');
  }

  public function login(){
    return view('user/login');
  }
}
