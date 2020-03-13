@extends('layouts/app')
@section('content')
<div class="back">
    <br>
<div class="centercr">
    <center>
            <form class="form-horizontal" action="/user/{{$user->id}}" method="post">
              @csrf
              @method('put')
                <fieldset>

                <!-- Form Name -->
                <legend>Editar</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nome</label>
                  <div class="col-md-4">
                  <input id="name" name="name" type="text" class="form-control input-md" value="{{$user->name}}">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Email</label>
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" class="form-control input-md" value="{{$user->email}}">
                  </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                  <div class="col-md-4">
                    <input id="password" name="password" type="password" class="form-control input-md">
                  </div>
                </div>

                    <!-- Password App input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="passwordinput">Senha App</label>
                        <div class="col-md-4">
                            <input id="passworda" name="passworda" type="password" class="form-control input-md">
                        </div>
                    </div>

                <!-- Nivel input-->

                <div class="form-group">
                  <label class="col-md-4 control-label" for="type">Tipo de conta</label>
                  <div class="col-md-4">
                    <select class="custom-select" name="type" id="type">
                      <option value="default">User</option>
                      <option value="admin">Admin</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">

                </div>

                <div class="form-group">
                  <button type="submit" id="add" name="add" class="btn btn-outline-dark  btt" >Submeter</button>
                  </div>
                </fieldset>
            </form>
     </center>

</div>
<br>
</div>
@endsection
