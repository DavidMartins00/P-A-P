@extends('layouts/app')
@section('content') 
<div class="back">
    <br>
        <!-- User -->
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">User</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="/user">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('user.create') }}">Adicionar</a>
            </div>
     </center>
     
</div>
<br>
                            <!-- Utente -->
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">Utente</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="/utente">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('utente.create') }}">Adicionar</a>
            </div>
     </center>
     
</div>
<br>
                             <!-- Medicamentos -->
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">Medicamentos</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="/medica">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('medica.create') }}">Adicionar</a>
            </div>
     </center>
     
</div>
<br>
                             <!-- Serviços -->
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">Serviços</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="{{ route('servico.index') }}">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('servico.create') }}">Adicionar</a>
            </div>
     </center>
     </div><br>

                             <!-- Estado -->
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">Estado</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="{{ route('estado.index') }}">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('estado.create') }}">Adicionar</a>
            </div>
     </center>
     </div>

     <br>

                             <!-- Visita -->
<div class="centercr">
    <center>                
            <!-- Form Name -->
            <legend style="color:#2C2F33">Visita</legend>
                

            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-secondary btm" href="{{ route('visita.index') }}">Listar</a>
            </div>
            <br>
            <!-- Butao adicionar-->
            <div class="container">
                <a class="btn btn-outline-success btm" href="{{ route('visita.create') }}">Adicionar</a>
            </div>
     </center>
     </div>
     <br>
</div>

@endsection