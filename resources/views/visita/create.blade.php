@extends('layouts/app')
@section('content') 
<div class="fs">
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="{{ route('visita.store') }}" method="post">
              @csrf
                <fieldset>
                
                <!-- Form Name -->
                <legend>Adicionar</legend>

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Serviços</label>  
                  <div class="col-md-4 txta">
                    <textarea class="txta" id="ServicosV" name="ServicosV" rows="4" cols="50">
                    </textarea>
                  </div>
                </div>
                <!-------------------->

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Funcionario</label>  
                  <div class="col-md-4 txta">
                    <select name="IdFuncionario" id="IdFuncionario">
                      utente
                    @foreach ($users as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach        
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Utente</label>  
                  <div class="col-md-4 txta">
                    <select name="IdUtente" id="IdUtente">
                    @foreach ($utentes as $item)
                    <option value="{{$item->Id}}">{{$item->Nome}}</option>
                      @endforeach        
                    </select>
                  </div>
                </div>

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