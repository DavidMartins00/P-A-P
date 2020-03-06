<?php

namespace App\Http\Controllers;

use App\role_user;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('user.index',[
            'users' => User::orderBy('id')->paginate(10)
        ]);
    }

    public function pesquisar(Request $request)
    {
        $pesq = $request->get('pesq');

        $res = User::where('id','like','%'.$pesq.'%')
        ->orwhere('name','like','%'.$pesq.'%')
        ->orwhere('email','like','%'.$pesq.'%')
        ->orwhere('type','like','%'.$pesq.'%')
        ->get();

        return view('user.index',['users' => $res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
         return View("user/edit")->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
        'name' => 'required', 'string', 'max:255',
        'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
        'password' =>'sometimes','string',
        'type' =>'sometimes','string',
        ]);

        User::where(['id'=>$id])->update([
        'name'=>$data['name'],
        'email'=>$data['email'],
        'password'=>Hash::make($data['password']),
        'type'=>$data['type'],
      ]);

      return Redirect('/user')->with('fm_success','Utilizador alterado com sucesso!!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::where(['id'=>$id])->delete();
        return Redirect('/user')->with('fm_success','Utilizador eliminado com sucesso');
    }
}
