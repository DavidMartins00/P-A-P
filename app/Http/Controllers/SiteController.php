<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        return view('site/index');
    }

    public function add()
    {
        return view('user/register');
    }

    public function menu()
    {
        return view('site/menu');
    }

    public function sender(Request $request)
    {
        //Enviar email, para o mailtrap
        $name = $_POST['name'];

        Mail::send('site.mail', ['nome' => $name, 'email' => $_POST['email'], 'contacto' => $_POST['subject'], 'msg' => $_POST['msg']], function ($m) use ($name) {

            $m->from('GEV@PAP.com', 'GEV');
            $m->to('pap5234241@gmail.com', $name)->subject('Gev');
        });

        return redirect('site/index')->with('message', 'Login Failed');
    }
}
