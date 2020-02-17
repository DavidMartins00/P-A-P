@extends('layouts/app')
@section('content') 
<div class="back">
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="/servico/{{$serv->id}}" method="post">
              @csrf
              @method('put')
                <fieldset>
                
                <!-- Form Name -->
                <legend>Adicionar</legend>
               
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Serviço</label>  
                  <div class="col-md-4">
                  <input id="servico" name="servico" type="text" class="form-control input-md" value="{{$serv->servico}}">
                  </div>

                <br>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Categorias</label>  
                  <div class="col-md-4">
                  <input id="catg" name="catg" type="text" class="form-control input-md" value="{{$serv->categoria}}">
                  </div>

                <br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-dark">Editar</button>      
                  </div>  
                </div>
            </form>
     </center>
     
</div>
<br>
</div>
@endsection