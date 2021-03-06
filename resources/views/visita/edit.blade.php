@extends('layouts/app')
@section('content')
    <div class="back">
        <br>
        <div class="centercr">
            <center>
                <form class="form-horizontal" action="/visita/{{$vis->id}}" method="post">
                    @csrf
                    @method('put')
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Editar Visita</legend>

                        <!-- Nome input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Serviço</label>
                            <textarea class="textaa" block id="ServicosV" name="ServicosV" cols="50" rows="5"></textarea>
                        </div>
                        <!-------------------->

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Funcionário</label>
                            <div class="col-md-4 txta">
                                <select class="custom-select" name="IdFuncionario" id="IdFuncionario">
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
                                <select class="custom-select" name="IdUtente" id="IdUtente">
                                    @foreach ($utentes as $item)
                                        <option value="{{$item->Id}}">{{$item->Nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-dark">Editar</button>
                        </div>
                        </fieldset>
                </form>
            </center>
            <br>
        </div>
@endsection
