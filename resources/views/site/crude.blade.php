@extends('layouts/app')
@section('content') 
<div class="fs" style="background-color:#008000">
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="{{route('user.store')}}" method="post">
              @csrf
                <fieldset>
                
                <!-- Form Name -->
                <legend>Adicionar</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" class="form-control input-md">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nome</label>  
                  <div class="col-md-4">
                  <input id="nome" name="nome" type="text" class="form-control input-md">
                  </div>
                </div>
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                  <div class="col-md-4">
                    <input id="senha" name="senha" type="password" class="form-control input-md">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nivel</label>  
                  <div class="col-md-4">
                  <input id="nivel" name="nivel" type="text" class="form-control input-md">
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