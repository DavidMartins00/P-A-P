@extends('layouts/app')
@section('content') 
<div class="fs">
    <br>
<div class="centercr">
    <center>  
            <form class="form-horizontal" action="{{ route('servico.store') }}" method="post">
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
                  <label class="col-md-4 control-label" for="textinput">Serviços</label>  
                  <div class="col-md-4 txta">
                    <select name="cars">
                      @foreach ($users as $item)
                          
                      @endforeach
                      <option value="volvo">Volvo</option>

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