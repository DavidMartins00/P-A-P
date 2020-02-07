@extends('layouts/app')
@section('content') 
<div class="fs">
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="/estado/{{$est->id}}" method="post">
              @csrf
              @method('put')
                <fieldset>
                
                <!-- Form Name -->
                <legend>Adicionar</legend>
               
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nome</label>  
                  <div class="col-md-4">
                  <input id="nome" name="nome" type="text" class="form-control input-md" value="{{$est->nome}}">
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