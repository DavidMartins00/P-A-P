@extends('layouts/app')
@section('content') 

<div class="back">
    
    <br>
        <div class="centercr">
            <center>
            <form action="/pusers" method="GET">
            <h3>Pequisar</h3>
            <div class="col-md-4">
                <div class="col">
            <input type="text" name="pesq" class="form-control" placeholder="Pesquisar">
            <br>
            <input type="submit" value="Pesquisar" class="btn btn-outline-warning">
            </div>
            </div>
            </form>
            </center>
        </div>
    <br>

    <center>                  
    @forelse ($users as $user)
        <div class="centercr">     
            <p>Id: {{$user->id}}</p>
            <p>Nome: {{$user->name}}</p>
            <p>Email: {{$user->email}}</p>
            <div class="row">
                <div class="col">
                    <a href="/user/{{$user->id}}/edit" style="margin:1px" class="btn btn-outline-warning">Editar</a>
                </div>
                <div class="col">
                    <form action="/user/{{$user->id}}" style="margin:1px" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" name="" class="btn btn-outline-danger" value="Apagar">
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