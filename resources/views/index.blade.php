<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centro Médico</title>
@include('librerias_template')
<style>

</style>


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
                                <label for="exampleInputEmail1">Región</label>
                                <select id="region" name="region" class="form-control" onchange="get_comunas()">
                                    <option value="0">Seleccione una región..</option>
                                    @foreach($regiones as $region)
                                        <option value="{{$region->id}}">{{$region->id.' - '.$region->nombre}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Comuna</label>
                                <select id="comuna" name="comuna" class="form-control" onchange="get_clinicas()">
                                    <option value="0">Seleccione una comuna...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Clinica (Sucursal)</label>
                                <select id="clinica" name="clinica" class="form-control" onchange="get_especialidades()">
                                    <option value="0">Seleccione la clinica...</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Especialidad</label>
                                <select id="especialidad" name="especialidad" class="form-control" onchange="get_especialistas()">
                                    <option value="0">Seleccione la especialidad...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Especialista</label>
                                <select id="especialista" name="especialista" class="form-control">
                                    <option value="0">Seleccione un especialista...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fecha</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button type="button" class="btn tf-btn btn-primary" onclick="buscar_horas();"><span class="fa fa-search"></span>  Buscar</button>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br><br>
                            <div id="calendar" ></div>
                        </div>
                    </div>


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
                <small><em>Estimado(a) usuario(a), sólo pueden hacer ingreso al sistema, el personal autorizado por la clinica.</em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 ">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario"/>
                    </div>
                </div>
                <div class="col-lg-offset-2 col-lg-8 ">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password"/>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center><button class="btn btn-primary">Ingresar</button></center>
                </div>

            </div>


    </div>
</div>
@include('ver_horas_disponible')

<input type="hidden" id="url" name="url" value="{{url()}}" />
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
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset ('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<link href="{{asset('plugins/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
<link href="{{asset('plugins/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print' />
<script src="{{asset('plugins/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/lib/jquery.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/es.js')}}"></script>
<script src="{{asset('template/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/jquery.isotope.js')}}"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="{{asset('template/js/main.js')}}"></script>
<script>

    function get_especialistas()
    {
        var especialidad=$('#especialidad').val();
        $('#especialista').empty();
        $("#especialista").append(new Option("Seleccione un especialista...", 0));
        if(especialidad==0)
        {
            alert("Debe seleccionar un especialista");
        }else{
            $.ajax({
                url: '{{url()}}/get_especialistas',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{especialidad:especialidad},
                success:function(data)
                {
                    var datos=JSON.parse(data);
                    $('#especialista').empty();
                    $("#especialista").append(new Option("Todos", 0));
                    if(datos.length>0)
                    {
                        for(var i=0;i<datos.length;i++)
                        {
                            $("#especialista").append(new Option(datos[i]['nombre'], datos[i]['id']));
                        }
                    }else{
                        alert("No existen especialidad asociadas a dicha clinica");
                    }
                }
            });
        }
    }
    function get_especialidades()
    {
        var clinica=$('#clinica').val();
        $('#especialidad').empty();
        $("#especialidad").append(new Option("Seleccione una especialidad...", 0));
        $('#especialista').empty();
        $("#especialista").append(new Option("Seleccione un especialista...", 0));
        if(clinica==0)
        {
            alert("Debe seleccionar una clinica");
        }else{
            $.ajax({
                url: '{{url()}}/get_especialidades',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{clinica:clinica},
                success:function(data)
                {
                    var datos=JSON.parse(data);
                    $('#especialidad').empty();
                    $("#especialidad").append(new Option("Seleccione una especialidad...", 0));
                    if(datos.length>0)
                    {
                        for(var i=0;i<datos.length;i++)
                        {
                            $("#especialidad").append(new Option(datos[i]['nombre'], datos[i]['id']));
                        }
                    }else{
                        alert("No existen especialidad asociadas a dicha clinica");
                    }
                }
            });
        }
    }

    function get_clinicas(){
        var comuna=$('#comuna').val();
        $('#especialidad').empty();
        $("#especialidad").append(new Option("Seleccione una especialidad...", 0));
        $('#especialista').empty();
        $("#especialista").append(new Option("Seleccione un especialista...", 0));
        if(comuna==0)
        {
            alert("Debe seleccionar una comuna");
        }else{
            $.ajax({
                url: '{{url()}}/get_clinicas',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comuna:comuna},
                success:function(data)
                {
                    var datos=JSON.parse(data);
                    $('#clinica').empty();
                    $("#clinica").append(new Option("Seleccione una clinica...", 0));
                    if(datos.length>0)
                    {
                        for(var i=0;i<datos.length;i++)
                        {
                            $("#clinica").append(new Option(datos[i]['nombre'], datos[i]['id']));
                        }
                    }else{
                        alert("No existen clinicas asociadas a dicha comuna");
                    }
                }
            });
        }
    }
    function get_comunas()
    {
        var region=$('#region').val();
        $('#comuna').empty();
        $("#comuna").append(new Option("Seleccione una comuna...", 0));
        $('#clinica').empty();
        $("#clinica").append(new Option("Seleccione una clinica...", 0));
        $('#especialidad').empty();
        $("#especialidad").append(new Option("Seleccione una especialidad...", 0));
        $('#especialista').empty();
        $("#especialista").append(new Option("Seleccione un especialista...", 0));
        if(region==0)
        {
           alert("Debe seleccionar una región");
        }else{
            $.ajax({
                url: '{{url()}}/get_comunas',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{region:region},
                success:function(data)
                {
                    var datos=JSON.parse(data);
                    $('#comuna').empty();
                    $("#comuna").append(new Option("Seleccione una comuna...", 0));
                    if(datos.length>0)
                    {
                        for(var i=0;i<datos.length;i++)
                        {
                            $("#comuna").append(new Option(datos[i]['nombre'], datos[i]['id']));
                        }
                    }else{
                        alert("No existen clinicas asociadas a ninguna comuna de la región seleccionada");
                    }
                }
            });
        }

    }
    function buscar_horas(){

    }

    $(document).ready(function()
    {
        var url=$('#url').val();
        $('#calendar').fullCalendar({

            //  eventSources: ['{{url()}}/carga_eventos'],
            //timezone: 'UTC',
            //default: true,
            contentHeight: 'auto',
            lang: 'es',
            ignoreTimezone:true,
            firstDay:1,
            height: '100%',
            header: {
                center: 'prev,title,next'
            },
            buttonText: {
                day: 'Día',
                month: 'Mes',
                week: 'Semana',
                today : 'Hoy'
            },
            axisFormat: 'HH:mm',
            timeFormat: 'HH:mm',
            displayEventTime: false,

            eventRender: function(event, element, view,calEvent) {
                $(element).css('height','50');
                $(element).css('background-color','#32D774');
                element.find(".fc-title").append('<center><img src="'+url+'/iconos/ok.png" width="25px" height="25px"/></center>');
                //element.find(".fc-content").append('<br><center><img src="'+url+'/iconos/ok.png" width="20px" height="20px"/></center>');
                element.bind('click', function() {
                    $('#verHorasDisponibles').modal();
                    var fecha=moment(event.start).format("DD-MM-YYYY");
                    alert(fecha);
                });
            },

            dayClick: function(date, jsEvent, view) {
               // $('#agregar_tarea').modal();
            },
            events: [
                {
                    start: '2016-12-01T00:00:00',
                    end:'2016-12-01T23:59:59'
                },
                {
                    start: '2016-12-06T00:00:00',
                    end:'2016-12-06T23:59:59'
                },
                {
                    start: '2016-12-09T00:00:00',
                    end:'2016-12-09T23:59:59'
                },

            ]

        });
    });
</script>
</body>
</html>
