<?php

namespace App\Http\Controllers;

use App\User;
use App\Utente;
use App\Visita;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $visita = Visita::select()->get();
        $users = User::select()->get();
        $utentes = Utente::select()->get();
        return view('visita.index')->with(compact('visita','users','utentes'));
    }

    public function pesquisar(Request $request)
    {

        $pesq = $request->get('pesq');
        $urs = $request->get('users');
        $utt = $request->get('utente');

        $res = Visita::where('id','like','%'.$pesq.'%')->get();
        // ->orwhere('IdUtente','like','%'.$utt.'%')
        // ->orwhere('IdFuncionario','like','%'.$urs.'%')
        // ->orwhere('ServicosV','like','%'.$pesq.'%')
        //

        if($urs != 0){
        $res = Visita::whereHas('user', function($q) use($urs){
            $q->where('IdFuncionario','LIKE','%'.$urs.'%');
        })->get();
        }

        if($utt != 0){
            $res = Visita::whereHas('utente', function($q) use($utt){
                $q->where('IdUtente','LIKE','%'.$utt.'%');
            })->get();
            }

        $users = User::select()->get();
        $utentes = Utente::select()->get();
        return view('visita.index',['visita' => $res])->with(compact('users','utentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
     * @param Request $request
     * @return Response
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
     * @return Response
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
     * @return Response
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
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
        'ServicosV' => 'sometimes',
        'IdFuncionario' => 'sometimes',
        'IdUtente' => 'sometimes',
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
     * @return Response
     */
    public function destroy($id)
    {
        Visita::where(['id'=>$id])->delete();
        return Redirect('/visita')->with('fm_success','Visita eliminado com sucesso');
    }
}
