@extends('layouts/app')
@section('content') 

    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              @csrf
                <fieldset>
                
                <!-- Form Name -->
                <legend>LogIn</legend>
               
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">ID</label>  
                  <div class="col-md-4">
                    <input id="id" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>
                    
                    @error('id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                  </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                  <div class="col-md-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
@endsection