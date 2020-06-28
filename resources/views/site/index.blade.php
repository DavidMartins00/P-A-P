@extends('layouts/app')
@section('content')
    <head>
        <style>
            body {
                background-color: #ffffff;
            }

            .form-control {
                width: 100%;
                text-align: left;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: -45%;
            }
        </style>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <script>

            $(function () {
                $.scrollify({
                    section: "section",
                    scrollbars: false,
                    scrollSpeed: 1100,
                    before: function (i, panels) {

                        var ref = panels[i].attr("data-section-name");

                        $(".pagination .active").removeClass("active");

                        $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
                    },
                    afterRender: function () {
                        var pagination = "<ul class=\"pagination\">";
                        var activeClass = "";
                        $(".panel").each(function (i) {
                            activeClass = "";
                            if (i === $.scrollify.currentIndex()) {
                                activeClass = "active";
                            }
                            pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
                        });

                        pagination += "</ul>";

                        $(".home").append(pagination);
                        $(".pagination a").on("click", $.scrollify.move);
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
                <div class="carousel-item active" style="background-image: url('{{ asset('img/cr1.jpg') }}')">
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('img/cr2.png') }}')">
                </div>
            </div>
        </div>
        <div>
            {{--Nome/pequena descrição do site--}}
            <div style="text-align: center;">
                <div class="center tt">
                    <h1>Lar da boa esperança</h1>
                    <h3>Lar de idodos</h3>
                </div>
            </div>
        </div>
    </section>
    <section name="desc">
        <!-- Inicio da 1 pagina--> <br><br><br> <br> <br> <br>
        <div style="text-align: center;">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-2">
                        <img class="imgr" src="{{ asset('img/sala.jpg') }}" alt="">
                    </div>

                    <div class="col-md-10">
                        <div class="textaa">
                            <p class="pp h1">A nossa sala acolhedora para reunir os nossos utentes</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10">
                        <div class="textaa">
                            <p class="pp h1">A nossa cantina com comidas deliciosas para o gosto de todos</p>
                        </div>
                    </div>
                    <div class="col-md-2">

                        <img class="imgr" src="{{ asset('img/cantina.jpg') }}" alt="">
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-md-2">
                        <img class="imgr" src="{{ asset('img/quarto.jpg') }}" alt="">
                    </div>
                    <div class="col-md-10">
                        <div class="textaa">
                            <p class="pp h1">Os nossos quartos aconchegantes para todo o tipo de utentes</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section name="cc">
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card" style="width: 83%;">
                        <div style="text-align: center;">
                            <img src="{{ asset('img/support.png') }}" class="card-img-top" alt="..."
                                 style="width: 150px; height:auto">
                        </div>
                        <div style="text-align: center;">
                            <div class="card-body">
                                <h5 class="card-title">Departamento</h5>
                                <p class="card-text">Nº Telefone: 123456789 <br> Nº Telefone: 123456789</p>
                                <b>Segunda a Sexta: 9h-18h</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <iframe class="mapb"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60808.862742263394!2d-8.908793278827932!3d38.9035869669984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDUzJzU4LjMiTiA4wrA1Mic0Ni41Ilc!5e0!3m2!1spt-PT!2spt!4v1584393105454!5m2!1spt-PT!2spt"
                            width="800" height="600" frameborder="0" style="border:10px;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="row">
                <div class="formc">
                    <form method="post" action="/send">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input class="form-controll" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-controll" type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Contacto</label>
                            <input class="form-controll" type="text" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="msg">Mensagem</label>
                            <textarea class="form-controll" name="msg"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-success" name="send_message_btn">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
    </section>


@endsection
