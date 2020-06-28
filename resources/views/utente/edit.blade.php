@extends('layouts/app')
@section('content')
<div class="back">
    <br>
<div class="centercr">
    <center>
            <form class="form-horizontal" action="/utente/{{$utt->Id}}" method="post">
              @csrf
              @method('put')
                <fieldset>

                <!-- Form Name -->
                <legend>Editar Utente</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nome</label>
                  <div class="col-md-4">
                  <input id="Nome" name="Nome" type="text" class="form-control input-md" value="{{$utt->Nome}}">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Data de Nascimento</label>
                  <div class="col-md-4">
                  <input id="DtNasc" name="DtNasc" type="date" class="form-control input-md" value="{{$utt->DtNasc}}">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Morada</label>
                  <div class="col-md-4">
                  <input id="Morada" name="Morada" type="text" class="form-control input-md" value="{{$utt->Morada}}">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Código Postal</label>
                  <div class="col-md-4">
                  <input id="CodPost" name="CodPost" type="text" class="form-control input-md" value="{{$utt->CodPost}}">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Contactos</label>
                  <div class="col-md-4">
                  <input id="Contactos" name="Contactos" type="text" class="form-control input-md" value="{{$utt->Contactos}}">
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" id="add" name="add" class="btn btn-outline-dark btt" >Submeter</button>
                  </div>
                </fieldset>
            </form>
     </center>

</div>
<br>
</div>
@endsection
