<?php

namespace App\Http\Controllers;

use App\Medicamentos;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medic.index',[
            'medica' => Medicamentos::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("medic.create");
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
          ]);
      
          $data = $request->all();
          $med = new Medicamentos();
          $med->Nome = $data['nome']; 
          $med->save();
          return Redirect('/')->with('fm_success','Medicamento adicionado com sucesso!!');
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
        $med = Medicamentos::findorfail($id);
        return View("medic.edit")->with(compact('med')); 
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
        'nome' => 'required', 'string', 'max:255',
        ]);

        Medicamentos::where(['id'=>$id])->update([
        'nome'=>$data['nome'],
      ]);

      return Redirect('/l')->with('fm_success','Medicamento alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicamentos::where(['id'=>$id])->delete();
        return Redirect('/l')->with('fm_success','Medicamento eliminado com sucesso');
    }
}
