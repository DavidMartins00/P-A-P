
@extends('layouts/app')
@section('content') 
<div style="background-color:#008000">
    <br>
<div class="centercr rounded">
    <center>  
            <form class="form-horizontal">
                <fieldset>
                
                <!-- Form Name -->
                <legend>Adicionar</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Id Conta</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="textinput" type="text" class="form-control input-md">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Email</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="textinput" type="text" class="form-control input-md">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nome</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="textinput" type="text" class="form-control input-md">
                  </div>
                </div>
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                  <div class="col-md-4">
                    <input id="passwordinput" name="passwordinput" type="password" class="form-control input-md">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nivel</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="textinput" type="text" class="form-control input-md">
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-dark" >Submeter</button>
                  </div>                
                </fieldset>
            </form>
     </center>
     
</div>
<br>
</div>

@endsection