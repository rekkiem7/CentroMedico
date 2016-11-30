<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centro Médico</title>
<head>
@include('librerias_template')
</head>
<body>
<!-- Navigation
==========================================-->
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Centro Médico</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="page-scroll">Home</a></li>
                <li><a href="#tf-about" class="page-scroll">Nosotros</a></li>
                <li><a href="#tf-team" class="page-scroll">Equipo</a></li>
                <li><a href="#tf-clients" class="page-scroll">Convenios</a></li>
                <!--<li><a href="#tf-works" class="page-scroll">Portafolio</a></li>-->
                <!--<li><a href="#tf-testimonials" class="page-scroll">Testimonios</a></li>-->
                <li><a href="#tf-contact" class="page-scroll">Reservar Hora</a></li>
                <li><a href="#tf-works" class="page-scroll">Ingresar</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Home Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1>Bienvenido(a) al <strong><span class="color">Centro Médico</span></strong></h1>
            <p class="lead">Somos un clínica prestigiosa <strong> con años de experiencia</strong> y con <strong>extraordinarios profesionales a su servicio</strong></p>
            <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('template/img/icon-doctor.png')}}" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h4>Nosotros</h4>
                        <h2>Servicio Médico de <strong>Excelencia</strong></h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro">Nuestros profesionales están altamente calificados para atender y entregar un servicio médico eficiente. Nuestra vocación, es <strong>ayudar</strong> y <strong>esforzarnos al máximo</strong> para que nuestros pacientes se sientan <strong>satisfechos</strong> y vuelvan a <strong>depositar su confianza en nosotros.</strong></p>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Mision</strong> - <em>Entregar un servicio de atención médica de alta calidad a nuestros pacientes.</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Habilidades</strong> - <em>Contamos con una amplia gama de especialidades médicas, como por ejemplo: Odontología, Kinesiología,Traumatología, etc.</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Clientes</strong> - <em>Público en general con fonasa o isapre.</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Page
==========================================-->
<div id="tf-team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Nuestro <strong>equipo</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">
                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-1.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Franco Torres</h3>
                            <p>Kinesiólogo</p>
                            <p>Nuestra vocación por el paciente, es nuestro compromiso</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-2.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Rocio Reyes</h3>
                            <p>Odontóloga</p>
                            <p>Entregar un hermosa sonrisa, es nuestra prioridad</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-3.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Ivan Carmona</h3>
                            <p>Médico General</p>
                            <p>Restaurar y resguardar la salud de nuestro paciente, es nuestro objetivo</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-4.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Isabel Bustos</h3>
                            <p>Traumatóloga</p>
                            <p>Recuperar el físico del paciente con integridad y perseverancia</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-4.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Isabel Bustos</h3>
                            <p>Traumatóloga</p>
                            <p>Recuperar el físico del paciente con integridad y perseverancia</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-1.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Franco Torres</h3>
                            <p>Kinesiólogo</p>
                            <p>Nuestra vocación por el paciente, es nuestro compromiso</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-2.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Rocio Reyes</h3>
                            <p>Odontóloga</p>
                            <p>Entregar un hermosa sonrisa, es nuestra prioridad</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('template/img/team/new-3.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Ivan Carmona</h3>
                            <p>Médico General</p>
                            <p>Restaurar y resguardar la salud de nuestro paciente, es nuestro objetivo</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Clients Section
==========================================-->
<div id="tf-clients" class="text-center">
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <h2>Algunos <strong>Convenios</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('template/img/client/colmena.jpg')}}">
                </div>
                <div class="item">
                    <img src="{{asset('template/img/client/cruzblanca.png')}}">
                </div>
                <div class="item">
                    <img src="{{asset('template/img/client/fonasa.jpg')}}">
                </div>
                <div class="item">
                    <img src="{{asset('template/img/client/consalud.png')}}">
                </div>
                <div class="item">
                    <img src="{{asset('template/img/client/masvida.jpg')}}">
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Contact Section
==========================================-->
<div id="tf-contact" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">
                    <h2>Reserva <strong>tu hora</strong> con anticipación</h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>Seleccione la especialidad y la fecha en que desea la atención</em></small>
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Especialidad</label>
                                <select id="especialidad" name="especialidad" class="form-control">
                                    <option value="0">Seleccione la especialidad...</option>
                                    <option value="1">Medicina General</option>
                                    <option value="2">Traumatología</option>
                                    <option value="3">Kinesiología</option>
                                    <option value="4">Odontología</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fecha</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    </div>

                    <button type="submit" class="btn tf-btn btn-default">Reservar</button>
                </form>

            </div>
        </div>

    </div>
</div>
<div id="tf-works">
    <div class="container"> <!-- Container -->
         <div class="section-title text-center center">
                <h2>Ingreso <strong>Personal Autorizado</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
            </div>
            <div class="space"></div>


    </div>
</div>

<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>Diseñado por <a href="http://titands.cl">Titán Development Solutions</a> y codificado por <a>Pablo Barría Reyes</a>. Todos los derechos reservados. COPYRIGHT © 2016.</p>
        </div>
        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('template/js/jquery.1.11.1.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/jquery.isotope.js')}}"></script>

<script src="{{asset('template/js/owl.carousel.js')}}"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="{{asset('template/js/main.js')}}"></script>
</body>
</html>
