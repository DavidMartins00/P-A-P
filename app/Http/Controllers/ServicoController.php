<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medic.index',[
            'servico' => Servico::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("servico.create");
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
            'servico' => 'required|max:255',
            'categoria' => 'required|max:255',
          ]);
      
          $data = $request->all();
          $serv = new Servico();
          $serv->servico = $data['nome'];
          $serv->categoria = $data['catg']; 
          $serv->save();
          return Redirect('/')->with('fm_success','Serviço adicionado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serv = Servico::findorfail($id);
        return View("servico.edit")->with(compact('serv')); 
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
        'servico' => 'required', 'string', 'max:255',
        'categoria' => 'required', 'string', 'max:255',
        ]);

        Servico::where(['id'=>$id])->update([
        'servico'=>$data['servico'],
        'categoria'=>$data['catg'],
      ]);

      return Redirect('/l')->with('fm_success','Serviço alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servico::where(['id'=>$id])->delete();
        return Redirect('/l')->with('fm_success','Serviço eliminado com sucesso');
    }
}
