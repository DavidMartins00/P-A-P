@extends('layouts/app')
@section('content') 

<div class="fs">
    <br>
    <center>                  
    @forelse ($estado as $est)
        <div class="centercr">     
            <p>Id: {{$est->id}}</p>
            <p>Nome: {{$est->nome}}</p>
            <div class="row">
                <div class="col">
                    <a href="/estado/{{$est->id}}/edit" style="margin:1px" class="btn btn-outline-warning">Editar</a>
                </div>
                <div class="col">
                    <form class="" action="/estado/{{$est->id}}" style="margin:1px" method="post">
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