@extends('layouts.plantilla')
@section('content')
    <section id="home" class="ftco-section bg-light">
        <div class="container news-section">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-12 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Noticias</span> Recientes</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($eventos as $evento)
                <div class="blog-container col-xs-6 col-sm-4">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{url('/storage/images/eventos/'.$evento->image)}}');">
                            <div class="meta-date text-center p-2">
                                <?php
                                $date = new DateTime(explode(" ",$evento->fecha)[0]);
                                $formatedDate = $date->getTimestamp();
                                setlocale(LC_TIME,'esm.UTF-8');
                                echo '<span class="day">'.strftime('%d',$formatedDate).'</span>
                                <span class="mos">'.ucfirst(substr(strftime('%B',$formatedDate),0,3)).'</span>
                                <span class="yr">'.strftime('%Y',$formatedDate).'</span>                              
                                '
                                ?>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">{{substr($evento->titulo,0,109)}}</a></h3>
                            <div class="description-news">
                                <p> {!!strip_tags($evento->descripcion)!!}</p>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{route('eventos.show',$evento)}}" class="btn btn-info">Leer más<span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
                @endforeach
                
            </div>
        </div>
    </section>
    <div class="main">
        <section class="module" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="module-title font-alt">Quiénes somos</h2>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-12">
                        <div class="features-item">
                            <div class="features-icon text-center"><span class="icon-book-open"></span></div>
                            <h3 class="features-title font-alt text-center">Historia</h3>
                            <p>El departamento de Estudios Sobre Movimientos Sociales surgió en 1987 como un centro de investigación, creado por la Dirección de Investigación y Superación Académica, dedicado a la investigación científica de la problemática de los movimientos sociales y, de manera más amplia, de los estudios sociopolíticos de Jalisco y México. Así mismo pretende estudiar a la sociedad civil en su relación con la sociedad política, concibiendo a los movimientos sociales como expresión de la sociedad civil, con el objetivo de comprender el carácter de nuestro entorno social y político a nivel regional y nacional.
                                <br>
                                <i>Inicialmente se contempló las siguientes áreas:</i>
                                <ul>
                                    <li>Movimiento obrero</li>
                                    <li>Movimiento campesino</li>
                                    <li>Movimiento popular urbano</li>
                                    <li>Movimientos de sectores medios y burguesía</li>
                                    <li>Ideología y cultura de los movimientos sociales</li>
                                    <li>Y Movimientos sociales de grupos marginados y minorías (feministas, étnicos, ecologistas, de jóvenes, etc)</li>
                                </ul>

                                Fue en 1990 cuando el H. Consejo General Universitario sancionó su existencia legal como Centro de Investigación Sobre Movimientos Sociales, (CISMOS); cambiando su denominación a Departamento de Estudios Sobre Movimientos Sociales (DESMOS) en 1994, cuando se creó la Red Universitaria de Jalisco. En términos generales, su objeto de estudio es amplio y afín al estudio de la sociedad y sus acciones colectivas, así como la relación entre la sociedad política y la sociedad civil, en cuanto que los movimientos sociales, como expresión de ésta, cumplen el papel de mediadores o de instrumentos de confrontación con el Estado.
                            </p>
                            <div class="features-icon text-center"><span class="icon-target"></span></div>
                            <h3 class="features-title font-alt text-center">Objetivos</h3>
                            <p>Se busca conocer este tipo de expresiones de la sociedad mexicana por cuanto han sido y son determinantes para la conservación o el desmantelamiento de los proyectos dominantes. Asimismo, para la redefinición y la construcción de proyectos alternativos de la nación. Se estudia a los actores sociales que construyen a la sociedad y al Estado de una u otra manera, que a nivel regional y nacional inciden en el carácter de nuestro entorno social y político.</p>
                            <div class="features-icon text-center"><span class="icon-search"></span></div>
                            <h3 class="features-title font-alt text-center">Líneas de investigación</h3>
                            Actualmente se trabaja en las siguientes líneas de investigación:
                            <ul>
                                <li>Movimientos Sociales: de resistencia, en defensa de la vida, autonomistas, indígenas, armados, magisteriales, estudiantiles</li>
                                <li>Sistema político</li>
                                <li>Sistema de partidos políticos</li>
                                <li>Política económica y social</li>
                                <li>Antropología política</li>
                                <li>Secularización y política</li>
                                <li>Sociedad y Poder</li>
                                <li>Migración nacional e internacional</li>
                                <li>Juventud, violencia y cultura política</li>
                                <li>Organizaciones por la justicia de víctimas de desaparición forzada</li>
                                <li>Derechos Humanos</li>
                                <li>Mujeres y prostitución</li>
                                <li>Cultura política de género</li>
                                <li>Mercado de trabajo, empleo, subcontratación laboral, intermediación laboral en Jalisco</li>
                                <li>Identidad</li>
                                <li>Cultura</li>
                                <li>Medio ambiente</li>
                                <li>Globalización</li>
                                <li>Mundialización</li>
                                <li>Sistema político</li>
                                <li>Movimientos sociales</li>
                                <li>Y además, se tiene un Centro de Estudios Observatorio Social</li>
                                <li>Identidades</li>
                                <li>Género y feminismos</li>
                                <li>Secularización y restauración católica</li>
                                <li>Interdisciplinariedad</li>
                            </ul>
                            <h3 class="features-title font-alt text-center">Cuerpos académicos con sede en el DESMOS</h3>
                            <ul>
                                <li>Estado y movimientos sociales</li>
                                <li>Historia, Testimonios e Identidad social</li>
                            </ul>
                            <h3 class="features-title font-alt text-center">Otros cuerpos académicos a los que pertenecen investigadores del DESMOS </h3>
                            <ul>
                                <li>Cultura, política y colonialidad</li>
                                <li>Estudios Laborales y Desigualdad Social</li>
                                <li>Teoría Crítica: Análisis del Presente</li>
                                <li>Desarrollo Sustentable y Salud Ambiental</li>
                                <li>Cultura, Género y Relaciones Sociales</li>
                                <li>Procesos sociales, migratorios, espaciales y demográficos en contextos urbanos y rurales</li>
                            </ul>
                            <h3 class="features-title font-alt text-center">Docencia</h3>
                            <p>Se cuenta con la terminal de Estudios Sociopolíticos de la Maestría en Ciencias Sociales</p>
                            <h3 class="features-title font-alt text-center">Extensión</h3>
                            <div class="somos-extension container">
                                <div class="row">
                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a target="_blank" href="https://www.facebook.com/ObserVamos" class="extension-container bg-extension2" style="background-image: url('../public/images/observatorio.jpg');">

                                        </a>
                                    </div>
                                    
                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a target="_blank" href="http://www.cucsh.udg.mx/cmarti/historia" class="extension-container bg-extension1">
                                            <div>
                                                <img src="../public/images/martiheader_0.jpg"/>
                                                <p>Cátedra José Martí</p>
                                            </div>
                                        </a>
                                    </div>
                                    

                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a style="background-size:cover; justify-content: flex-end; background-image: url('../public/images/catalogo.jpg');" class="extension-container bg-extension2" target="_blank" href="https://docs.google.com/spreadsheets/d/1IMWvKkySg5aHb3dfXgQj-F7HJ1Cdw8qj/edit#gid=498495349">
                                            <div style="color:white; width: 100%; background:rgba(0,0,0,0.7); padding:10px;">
                                                <p class="m-0">Catálogo de biblioteca</p>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a class="extension-container bg-extension2" target="_blank" href="https://m.youtube.com/channel/UC4Bt7XtTouqXqFTmztzBELA/featured">
                                            <div>
                                                <img src="../public/images/banner desmos youtube-02.jpg"/>
                                            </div>
                                        </a>
                                    </div>


                                </div>






                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module pb-0" id="works">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="module-title font-alt">Investigadores</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
            </div>
            <div class="container investigadores">
                @foreach ($investigadores as $investigador)
                
                    <div class="investigador-card w-30">
                        <div class="img-border-rounded">
                            @if(Storage::disk('images-investigadores')->has($investigador->image))
                                <img src="{{url('/storage/images/investigadores/'.$investigador->image)}}"/>
                            @endif

                        </div>
                        <div class="investigadores-card--info">
                            @if(strlen($investigador->nombre.' '.$investigador->apellido)>36)
                                <h4>{{substr(($investigador->nombre.' '.$investigador->apellido),0,36).'...'}}</h4>
                            @else
                                <h4>{{$investigador->nombre.' '.$investigador->apellido}}</h4>
                            @endif
                            <h5>{{$investigador->grado}}</h5>
                            <h6>Linea de investigación: <i>{{substr($investigador->lineasInves,0,63).'...'}}</i></h6>
                        </div>
                        <br>
                        <button type="button" class="btn btn-info btnModal" data-toggle="modal" data-target="#modalInvest-{{$investigador->id}}">Info</button>
                        
                    </div>
                @endforeach
           </div>

        </section>

        <section class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="callout-btn-box"><a class="btn btn-w btn-round" href={{ route('investigadores.index') }} >Ver todos</a></div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="module-title font-alt">Publicaciones</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-6">
                        <a href="{{route('libros.index')}}" class="team-item bg-dark bg-gradient" style='background-image: url("../public/images/Libros.jpg")'>
                            <p class="u-non-blurred">Libros y capítulos</p>
                        </a>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-6" onclick="wow fadeInUp">
                        <a class="team-item bg-dark bg-gradient" style='background-image: url("../public/images/Revistas.jpg")'>  
                            <p class="u-non-blurred">Artículos en revistas científicas</p>
                        </a >
                    </div>
                </div>
            </div>
        </section>


        <section class="module" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="module-title font-alt">Divulgación</h2>

                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                        <div class="video-responsive">
                            <iframe
                                src="https://www.youtube.com/embed/zw75nL7kw7I"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Seminario: Ciudadanía Activa, movimientos electorales y candidaturas independientes.</a></h2>

                            </div>
                            <div class="post-entry">
                                <p>Seminario: Ciudadanía Activa, movimientos electorales y candidaturas independientes. Sesión 12 del Seminario Permanente: Movimientos Sociales, Acción Colectiva y Política. Participan: Javier Atilano (UNAM), Jorge Federico Eufracio Jaramillo (ITESO), Mariana Casillas (UdeG/Futuro). Modera: Denise Córdova (LAMAR). Realizado el día 23 de noviembre de 2021.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Leer más</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                        <div class="video-responsive">
                            <iframe
                                src="https://www.youtube.com/embed/IZFHYZn87KU"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Seminario: Migración, caravanas y movilización social.</a></h2>

                            </div>
                            <div class="post-entry">
                                <p>Seminario: Migración, caravanas y movilización social.  Sesión 11 del  Seminario Permanente: Movimientos Sociales, Acción Colectiva y Política. Participan: Diego Noel Ramos Rojas (UdeG), Virginia Betancourt (Colegio de Michoacán), Etol Exime (Universidad Estadual do Oeste de Paraná) e Iván Zambrano Zúñiga (Colegio de Jalisco). Modera: Esther Svetlana Velázquez Mancilla (ENES/UNAM). Realizado el día 19 de octubre del 2021.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Leer más</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                        <div class="video-responsive">
                            <iframe
                                src="https://www.youtube.com/embed/z_Ygk_l1Up8"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Seminario: Reflexiones Ayotzinapa. Memoria, justicia y acción colectiva.</a></h2>

                            </div>
                            <div class="post-entry">
                                <p>Seminario: Reflexiones Ayotzinapa. Memoria, justicia y acción colectiva. Sesión 10 del Seminario Permanente: Movimientos Sociales, Acción Colectiva y Política. Participan: Alejandra Márquez Colectivo Digna Locura), Darwin Franco (ITESO), Santos Urbina (UdeG), Perla López Fuerte (Colegio de Jalisco). Modera: Carolina Montero (Observatorio de Movimientos Sociales). Realizado el día 28 de septiembre del 2021. </p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Leer más</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="callout-btn-box"><a class="btn btn-w btn-round" href="portfolio_boxed_gutter_col_3.html">Ver más</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <img src="https://img.icons8.com/ios/50/FFFFFF/contact-card.png"/> 
            <h2 class="module-title font-alt">Contacto</h2>
            <div class="contact-container">

                <div class="contact-box">
                    <p><b>Jefe de departamento</b></p><br>
                    <p>Dr. Jaime Ezequiel Tamayo Rodríguez</p>
                    
                    
                </div>
                <div class="contact-box">
                    <p><b>Asistente de la jefatura</b></p><br>
                    <p>Mtra. Oralia Chantal Rodríguez Saucedo</p>
                    
    
                </div>
                <div class="contact-box">
                    <p><b>Atención</b></p>
                    <p>Norma Figueroa Hernández</p>
                    <p>Correo: <a href="mailto:desmos@academicos.udg.mx">desmos@academicos.udg.mx</a></p>
                    <p>Teléfono: <a href="tel:(33) 3819-3327">(33) 3819-3327</a></p>
    
                </div>
            </div>
        </section>
@endsection

@section('modal')
{{-- Modal --}}
@foreach ($investigadores as $investigador)
    <div class="modal fade" id={{'modalInvest-'.$investigador->id}}>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="img-border-rounded">
                        @if(Storage::disk('images-investigadores')->has($investigador->image))
                            <img src="{{url('/storage/images/investigadores/'.$investigador->image)}}"/>
                        @endif
                    </div>
                    <h1>{{$investigador->nombre.' '.$investigador->apellido}}</h1><br>
                </div>
                <div class="modal-body">
                    <div class="informacionModal">
                        @if($investigador->reconocimientos)
                            <div class="modal-info--item">
                                <b>Reconocimientos: </b> {{$investigador->reconocimientos}}
                            </div>
                        @endif
                        @if($investigador->proyecto_invest)
                            <div class="modal-info--item">
                                <b>Proyecto de investigación en proceso: </b> {{$investigador->proyecto_invest}}
                            </div>
                        @endif
                        <div class="modal-info--item">
                            <b>Publicaciones: </b>
                            {{$investigador->publicaciones}}
                        </div>
                        <div class="modal-info--item">
                            <b>Contacto: </b>
                            {{$investigador->correo}}
                        </div>
                        <div class="modal-info--item">
                            <b>Grado: </b>
                            {{$investigador->grado}}
                        </div>
                        <div class="modal-info--item">
                            <b>Lineas de investigación: </b>
                            {{$investigador->lineasInves}}
                        </div>
                        
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" data-dismiss="modal" value="Cerrar">
                </div>
            </div>
        </div>
        
    </div>
@endforeach

@endsection

@section('js')

<script>
    function crearModal(idInvestigador){

    
    document.getElementById('modalInvest').innerHTML = ;

    }
    document.getElementById('modalInvest').style = "display:inline";
</script>

@endsection