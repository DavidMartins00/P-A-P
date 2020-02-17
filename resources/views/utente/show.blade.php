@extends('layouts/app')
@section('content') 

<div class="back">
    <br>
    <center>                  
        <div class="centercr">     
            <h3>Nome: {{$utn->Nome}}</h3>
        <p>Data de Nascimento: {{$utn->DtNasc}}</p>
        <p>Morada: {{$utn->Morada}}</p>
        <p>Codigo Postal: {{$utn->CodPost}}</p>
        <p>Contactos: {{$utn->Contactos}}</p>
            <div class="row">
                <div class="col">
                    <a href="/utente" style="margin:1px" class="btn btn-outline-dark">Voltar</a>
                </div>
            </div>
        </div>
    </center>
<br>
</div>

@endsection