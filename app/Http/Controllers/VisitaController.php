<?php

namespace App\Http\Controllers;

use App\User;
use App\Utente;
use App\Visita;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visita.index',[
            'visita' => Visita::orderBy('id')->paginate(10)
        ]);
    }

    public function pesquisar(Request $request)
    { 
        $pesq = $request->get('pesq');
        
        $res = Visita::where('id','like','%'.$pesq.'%')
        ->orwhere('IdUtente','like','%'.$pesq.'%')
        ->orwhere('IdFuncionario','like','%'.$pesq.'%')
        ->orwhere('ServicosV','like','%'.$pesq.'%')
        ->get();

        return view('visita.index',['visita' => $res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::select()->get();
        $utentes = Utente::select()->get();
         return view('visita.create')->with(compact('users','utentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'IdUtente' => 'required',
            'IdFuncionario' => 'required',
            'ServicosV' => 'required',
          ]);
      
          $data = $request->all();
          $vt = new Visita();
          $vt->IdUtente = $data['IdUtente'];
          $vt->IdFuncionario = $data['IdFuncionario'];
          $vt->ServicosV = $data['ServicosV'];
      
          $vt->save();
          return Redirect('/visita')->with('fm_success','Visita adicionado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utn = Visita::find($id);
         return view('visita.show')->with(compact('utn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vis = Visita::findorfail($id);
        $users = User::select()->get();
        $utentes = Utente::select()->get();
        return view('visita.edit')->with(compact('vis','users','utentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $request->validate([
        'ServicosV' => 'required',
        'IdFuncionario' => 'required',
        'IdUtente' => 'required',
        ]);
           
        Visita::where(['id'=>$id])->update([
        'ServicosV'=>$data['ServicosV'],
        'IdFuncionario'=>$data['IdFuncionario'],
        'IdUtente'=>$data['IdUtente'],
      ]);

      return Redirect('/visita')->with('fm_success','Utente alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visita::where(['id'=>$id])->delete();
        return Redirect('/visita')->with('fm_success','Visita eliminado com sucesso');
    }
}
