@extends('layouts/app')
@section('content') 

<div class="back">
    <br>
    <center>                  
    @forelse ($medica as $med)
        <div class="centercr">     
            <p>Id: {{$med->id}}</p>
            <p>Nome: {{$med->nome}}</p>
            <div class="row">
                <div class="col">
                    <a href="/medica/{{$med->id}}/edit" style="margin:1px" class="btn btn-outline-warning">Editar</a>
                </div>
                <div class="col">
                    <form class="" action="/medica/{{$med->id}}" style="margin:1px" method="post">
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