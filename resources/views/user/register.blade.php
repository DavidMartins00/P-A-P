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
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror

                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" class="form-control input-md @error('email') is-invalid @enderror">
                  </div>
                </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                  <div class="col-md-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  </div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror

                <div class="form-group">
                  <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>
                  <div class="col-md-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>
                @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                

                
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-dark">Registar</button>      
                </div>                
                </fieldset>
            </form>
     </center>
     
</div>
<br>
</div>
@endsection