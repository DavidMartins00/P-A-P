@extends('layouts/app')
@section('content')
<div class="back">
    <br>
    <div class="centercr">
        <center>
            <form class="form-horizontal" action="{{ route('visita.store') }}" method="post">
                @csrf
                <fieldset>

                    <!-- Form Name -->
                    <legend>Adicionar Visita</legend>

                    <!-- Nome input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Serviço</label>
                        <div class="col-md-4 txta">
                            <select name="ServicosV" id="ServicosV">
                                @foreach ($servico as $item)
                                    <option value="{{$item->categoria}} -- {{$item->servico}}">{{$item->servico}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-------------------->

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Funcionário</label>
                        <div class="col-md-4 txta">
                            <select name="IdFuncionario" id="IdFuncionario">
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
                        <button type="submit" class="btn btn-outline-dark btt">Adicionar</button>
                    </div>
                </fieldset>
            </form>
        </center>

    </div>
    <br>
</div>
@endsection
