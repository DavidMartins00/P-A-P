@extends('layouts/app')
@section('content')
<div class="back">
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
                  <label class="col-md-4 control-label" for="textinput">Serviço</label>
                  <div class="col-md-4">
                  <input id="servico" name="servico" type="text" class="form-control input-md @error('servico') is-invalid @enderror">
                  </div>
                </div>
                    @error('servico')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                <!-------------------->

                <!-- Nome input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Categoria</label>
                  <div class="col-md-4">
                  <input id="catg" name="catg" type="text" class="form-control input-md @error('catg') is-invalid @enderror">
                  </div>
                </div>
                    @error('catg')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                <!-------------------->

                <div class="form-group">
                  <button type="submit" class="btn btn-outline-dark btt">Adicionar</button>
                </div>
                </fieldset>
            </form>
     </center>

</div>
<br>
</div>
@endsection
