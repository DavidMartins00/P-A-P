@extends('layouts/app')
@section('content') 
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="{{ route('estado.store') }}" method="post">
              @csrf
                <fieldset>
                
                <!-- Form Name -->
                <legend>Adicionar</legend>

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nome</label>  
                  <div class="col-md-4">
                  <input id="nome" name="nome" type="text" class="form-control input-md @error('nome') is-invalid @enderror">
                  </div>
                </div>
                    @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                <!-------------------->

                <div class="form-group">
                  <button type="submit" class="btn btn-outline-dark">Adicionar</button>      
                </div>                
                </fieldset>
            </form>
     </center>
     
</div>
<br>
@endsection