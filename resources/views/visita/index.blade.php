@extends('layouts/app')
@section('content') 

<div class="fs">
    <br>
    <center>                  
    @forelse ($visita as $vis)
        <div class="centercr">     
            <p>Id: {{$vis->id}}</p>
            <p>Utente: {{$vis->IdUtente}}</p>
            <p>Funcionario: {{$vis->IdFuncionario}}</p>
            <p>Serviços: {{$vis->ServicosV}}</p>
            <div class="row">
                <div class="col">
                    <a href="/visita/{{$vis->id}}/edit" style="margin:1px" class="btn btn-outline-warning">Editar</a>
                </div>
                <div class="col">
                    <form class="" action="/visita/{{$vis->id}}" style="margin:1px" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-outline-danger" value="Apagar">
                      </form>
                </div>
            </div>
        </div>
    @empty
        <tr>
            <div class="centercr">Lista Vazia</div>
        </tr>
    @endforelse
    </center>
<br>
</div>

@endsection