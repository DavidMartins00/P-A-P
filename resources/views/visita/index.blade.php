@extends('layouts/app')
@section('content')

<div class="back">
    <br>

    <div class="centercr">
        <center>
            <form action="/pvis" method="GET">
                <h3>Pequisar</h3>
                <div class="col-md-4">
                    <input type="text" name="pesq" class="form-control" placeholder="Pesquisar">
                    <br>
                    <div class="row">
                        <div class="container">
                        {{-- Funcionarios --}}
                        <h4>Funcionário</h4>
                        <select class="custom-select" name="users" id="IdFuncionario">
                            <option class="dropdown-menu">Selecionar Funcionário</option>
                            @foreach ($users as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        <br><br>
                    </div>
                    <div class="container">
                        {{-- Utente --}}
                        <h4>Utente</h4>
                        <select class="custom-select"  name="utente" id="IdUtente">
                            <option>Selecionar Utente</option>
                            @foreach ($utentes as $item)
                            <option value="{{$item->Id}}">{{$item->Nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <br>
                    <input type="submit" value="Pesquisar" class="btn btn-outline-warning btt">
                </div>
            </form>
        </center>
    </div>
    <br>

    <center>
        @forelse ($visita as $vis)
        <div class="centercr">
            <p>Id: {{$vis->id}}</p>
            <p>Utente: {{$vis->utente->Nome}}</p>
            <p>Funcionário: {{$vis->user->name}}</p>
            <p>Serviços:</p>
            <div class="card w-90 text cardy">
                {{$vis->ServicosV}}
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <a href="/visita/{{$vis->id}}/edit" style="margin:1px" class="btn btn-outline-warning">Editar</a>
                </div>
                <div class="col">
                    <form class="" action="/visita/{{$vis->id}}" style="margin:1px" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-outline-danger" value="Apagar">
                    </form>
                </div>
            </div>
        </div>
        @empty
        <tr>
            <div class="centercr">Lista Vazia</div>
        </tr>
        @endforelse
    </center>
    <br>
</div>

@endsection
