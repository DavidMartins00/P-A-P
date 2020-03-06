@extends('layouts/app')
@section('content')
    <head>
        <style>
            body {background-color: #ffffff;}
        </style>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <script>

            $(function() {
                $.scrollify({
                    section:"section",
                    scrollbars:false,
                    scrollSpeed: 1100,
                    before:function(i,panels) {

                        var ref = panels[i].attr("data-section-name");

                        $(".pagination .active").removeClass("active");

                        $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
                    },
                    afterRender:function() {
                        var pagination = "<ul class=\"pagination\">";
                        var activeClass = "";
                        $(".panel").each(function(i) {
                            activeClass = "";
                            if(i===$.scrollify.currentIndex()) {
                                activeClass = "active";
                            }
                            pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
                        });

                        pagination += "</ul>";

                        $(".home").append(pagination);
                        /*

                        Tip: The two click events below are the same:

                        $(".pagination a").on("click",function() {
                          $.scrollify.move($(this).attr("href"));
                        });

                        */
                        $(".pagination a").on("click",$.scrollify.move);
                    }
                });
            });
        </script>

    </head>

    <!-- Carousel-->
    <section name="home">




        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{{ asset('img/ex1.png') }}')">
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('img/ex2.png') }}')">
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('img/ex3.png') }}')">
                </div>
            </div>
        </div>
        <div>
            <div class="center tt">
                <h1>Testeeeeeeee</h1>
                <h3>asdasdasdasdasdasdasdasasdas</h3>
            </div>
        </div>
    </section>
    <section name="desc">
        <!-- Inicio da 1 pagina--> <br><br><br> <br> <br> <br>
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-2">

                    <img class="imgr" src="{{ asset('img/sala.png') }}" alt="">
                </div>
                <div class="col-md-10">
                    <div class=" container-fluid textaa">
                        <p class="pp">asdasdasdasdasdasdadabr <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="textaa">
                        <p class="pp">asdasdasdasdasdasdadabr <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada
                        </p>
                    </div>
                </div>
                <div class="col-md-2">

                    <img class="imgr" src="{{ asset('img/sala.png') }}" alt="">
                </div>
            </div>
            <div class="row">

                <div class="col-md-2">
                    <img class="imgr" src="{{ asset('img/sala.png') }}" alt="">
                </div>
                <div class="col-md-10">
                    <div class="textaa">
                        <p class="pp">asdasdasdasdasdasdadabr <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada <br>
                            asdasdasdasdasdasdada
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section name="cc">
        <br><br><br> <br> <br> <br> <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/ex1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Departamento</h5>
                            <p class="card-text">Nº Telefone: 123456789 <br> Nº Telefone: 123456789</p>
                            <b>Segunda a Sexta: 9h-18h</b>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <iframe class="mapb" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12399.3137218655!2d-8.803214950000001!3d39.019227099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2spt!4v1583247726960!5m2!1spt-PT!2spt" width="600" height="450" frameborder="0" style="border:10px;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col-5">

                <div class="formc" style="background-color: white">
                <form method="post" action="/send">
                    @csrf
                    Nome: <input type="text" name="name" > <br />
                    Email: <input type="email" name="email" > <br />
                    Contacto: <input type="text" name="subject" > <br />
                    Mensagem: <textarea name="msg"></textarea>
                    <button type="submit" name="send_message_btn">Send</button>
                </form>
                </div>

            </div>
            <div class="col-7">

            </div>

        </div>
    </section>


@endsection

