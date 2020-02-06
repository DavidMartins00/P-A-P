<?php

namespace App\Http\Controllers;

use App\Utente;
use Illuminate\Http\Request;

class UtenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('utente.index',[
            'Utente' => Utente::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("utente.create");
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
            'nome' => 'required|max:255',
            'dtNasc' => 'required',
            'morada' => 'required',
            'codPost' => 'required',
            'contactos' => 'required',
          ]);
      
          $data = $request->all();
          $utt = new Utente();
          $utt->Nome = $data['nome'];
          $utt->DtNasc = $data['dtNasc'];
          $utt->Morada = $data['morada'];
          $utt->CodPost = $data['codPost'];
          $utt->Contactos = $data['contactos'];
      
          $utt->save();
          return Redirect('/utente')->with('fm_success','Utente adicionado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utn = Utente::find($id);
         return view('utente.show')->with(compact('utn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utt = Utente::findorfail($id);
         return View("utente.edit")->with(compact('utt'));  
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
        'Nome' => 'required',
        'DtNasc' => 'required',
        'Morada' => 'required',
        'CodPost' => 'required',
        'Contactos' => 'required',
        ]);
           
        Utente::where(['Id'=>$id])->update([
        'Nome'=>$data['Nome'],
        'DtNasc'=>$data['DtNasc'],
        'Morada'=>$data['Morada'],
        'CodPost'=>$data['CodPost'],
        'Contactos'=>$data['Contactos'],
      ]);

      return Redirect('/utente')->with('fm_success','Utente alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Utente::where(['Id'=>$id])->delete();
        return Redirect('/utente')->with('fm_success','Utente eliminado com sucesso');
    }
}
