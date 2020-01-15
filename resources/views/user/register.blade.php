@extends('layouts/app')
@section('content') 
<div class="fs">
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="{{ route('register') }}" method="post">
              @csrf
                <fieldset>
                
                <!-- Form Name -->
                <legend>Adicionar</legend>

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nome</label>  
                  <div class="col-md-4">
                  <input id="name" name="name" type="text" class="form-control input-md @error('name') is-invalid @enderror">
                  </div>
                </div>

                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" class="form-control input-md @error('email') is-invalid @enderror">
                  </div>
                </div>     
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                  <div class="col-md-4">
                    <input id="password" name="password" type="password" class="form-control input-md @error('password') is-invalid @enderror">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nivel</label>  
                  <div class="col-md-4">
                  <input id="nivel" name="nivel" type="text" class="form-control input-md @error('nivel') is-invalid @enderror">
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" id="add" name="add" class="btn btn-outline-dark" >Submeter</button>
                  </div>                
                </fieldset>
            </form>
     </center>
     
</div>
<br>
</div>
@endsection