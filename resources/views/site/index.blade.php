@extends('layouts/app')
@section('content')
<!-- Carousel-->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('{{ asset('img/ex1.jpg') }}')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/ex2.jpg') }}')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/ex3.jpg') }}')">
        </div>
      </div>
    </div>
    <div>
      <div class="center tt">
        <h1>Testeeeeeeee</h1>
        <h3>asdasdasdasdasdasdasdasasdas</h3>
      </div>
  </div>
  </header>
  <!-- Inicio da 1 pagina--> <br><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <img class="imgr" src="{{ asset('img/sala.jpg') }}" alt="">
      </div>
      <div class="col-md-10">
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
      </div>
      <div class="col-md-2">
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-10">
      </div>
    </div>
  </div>


@endsection
