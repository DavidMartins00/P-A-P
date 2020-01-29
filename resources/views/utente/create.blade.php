@extends('layouts/app')
@section('content') 
<div class="fs">
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="{{ route('utente.store') }}" method="post">
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

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Data Nascimento</label>  
                  <div class="col-md-4">
                  <input id="dtNasc" name="dtNasc" type="date" class="form-control input-md @error('dtNasc') is-invalid @enderror">
                  </div>
                </div>
                    @error('dtNasc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                <!-------------------->

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Morada</label>  
                  <div class="col-md-4">
                  <input id="morada" name="morada" type="text" class="form-control input-md @error('morada') is-invalid @enderror">
                  </div>
                </div>
                    @error('morada')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                <!-------------------->

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Codigo Postal</label>  
                  <div class="col-md-4">
                  <input id="codPost" name="codPost" type="text" class="form-control input-md @error('codPost') is-invalid @enderror">
                  </div>
                </div>
                    @error('codPost')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                <!-------------------->

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Contactos</label>  
                  <div class="col-md-4">
                  <input id="contactos" name="contactos" type="text" class="form-control input-md @error('contactos') is-invalid @enderror">
                  </div>
                </div>
                    @error('contactos')
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
</div>
@endsection