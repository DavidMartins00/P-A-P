
@extends('layouts/app')
<div class="container-fluid" style="background-color:blue">
@section('content')
<div class="back">
    <a class="btn btn-outline-dark btnc" href="/m">Voltar</a>

    <br>
    <div class="centercr">
        <center>
        <form action="/pest" method="GET">
        <h3>Pesquisar</h3>
        <div class="col-md-4">
            <div class="col">
        <input type="text" name="pesq" class="form-control" placeholder="Pesquisar">
        <br>
        <input type="submit" value="Pesquisar" class="btn btn-outline-warning  btt">
        </div>
        </div>
        </form>
        </center>
    </div>
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
</div>
