<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('estado.index',[
            'estado' => Estado::orderBy('id')->paginate(10)
        ]);
    }

    public function pesquisar(Request $request)
    {
        $pesq = $request->get('pesq');

        $res = Estado::where('id','like','%'.$pesq.'%')
        ->orwhere('nome','like','%'.$pesq.'%')
        ->get();

        return view('estado.index',['estado' => $res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("estado.create");
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
            'nome' => 'required|max:255',
          ]);

          $data = $request->all();
          $est = new Estado();
          $est->Nome = $data['nome'];
          $est->save();
          return Redirect('/estado')->with('fm_success','Estado adicionado com sucesso!!');
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
        $est = Estado::findorfail($id);
        return View("estado.edit")->with(compact('est'));
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
        'nome' => 'required', 'string', 'max:255',
        ]);

        Estado::where(['id'=>$id])->update([
        'nome'=>$data['nome'],
      ]);

      return Redirect('/estado')->with('fm_success','Estado alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Estado::where(['id'=>$id])->delete();
        return Redirect('/estado')->with('fm_success','Estado eliminado com sucesso');
    }
}
