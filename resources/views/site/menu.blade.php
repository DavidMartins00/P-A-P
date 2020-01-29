@extends('layouts/app')
@section('content') 
<div class="fs">
    <br>
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">User</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="/l">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="/a">Adicionar</a>
            </div>
     </center>
     
</div>
<br>

<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">Utente</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="/ll">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('utente.create') }}">Adicionar</a>
            </div>
     </center>
     
</div>
<br>
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">Medicamentos</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="{{ route('medica.index') }}">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('medica.create') }}">Adicionar</a>
            </div>
     </center>
     
</div>

</div>

@endsection