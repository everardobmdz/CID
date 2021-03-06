@extends('layouts.plantillaIndex')
@section('content')
    <section id="home" class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-12 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Noticias</span> Recientes</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($eventos as $evento)
                <div class="blog-container col-xs-6 col-sm-4">
                    <div class="blog-entry">
                        <a href="{{route('eventos.show',$evento)}}" class="block-20 d-flex align-items-end" style="background-image: url('{{url('/storage/images/eventos/'.$evento->image)}}');">
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
                            <h3 class="heading"><a href="{{route('eventos.show',$evento)}}">{{substr($evento->titulo,0,109)}}</a></h3>
                            <div class="description-news">
                                <p> {!!strip_tags($evento->descripcion)!!}</p>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{route('eventos.show',$evento)}}" class="btn btn-info">Leer m??s<span
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
        <section class="module" id="quienes-somos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="module-title font-alt">Qui??nes somos</h2>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-12">
                        <div class="features-item">
                            <div class="features-icon text-center"><span class="icon-book-open"></span></div>
                            <h3 class="features-title font-alt text-center">Historia</h3>
                            <p>El departamento de Estudios Sobre Movimientos Sociales surgi?? en 1987 como un centro de investigaci??n, creado por la Direcci??n de Investigaci??n y Superaci??n Acad??mica, dedicado a la investigaci??n cient??fica de la problem??tica de los movimientos sociales y, de manera m??s amplia, de los estudios sociopol??ticos de Jalisco y M??xico. As?? mismo pretende estudiar a la sociedad civil en su relaci??n con la sociedad pol??tica, concibiendo a los movimientos sociales como expresi??n de la sociedad civil, con el objetivo de comprender el car??cter de nuestro entorno social y pol??tico a nivel regional y nacional.
                                <br>
                                <i>Inicialmente se contempl?? las siguientes ??reas:</i>
                                <ul>
                                    <li>Movimiento obrero</li>
                                    <li>Movimiento campesino</li>
                                    <li>Movimiento popular urbano</li>
                                    <li>Movimientos de sectores medios y burgues??a</li>
                                    <li>Ideolog??a y cultura de los movimientos sociales</li>
                                    <li>Y Movimientos sociales de grupos marginados y minor??as (feministas, ??tnicos, ecologistas, de j??venes, etc)</li>
                                </ul>

                                Fue en 1990 cuando el H. Consejo General Universitario sancion?? su existencia legal como Centro de Investigaci??n Sobre Movimientos Sociales, (CISMOS); cambiando su denominaci??n a Departamento de Estudios Sobre Movimientos Sociales (DESMOS) en 1994, cuando se cre?? la Red Universitaria de Jalisco. En t??rminos generales, su objeto de estudio es amplio y af??n al estudio de la sociedad y sus acciones colectivas, as?? como la relaci??n entre la sociedad pol??tica y la sociedad civil, en cuanto que los movimientos sociales, como expresi??n de ??sta, cumplen el papel de mediadores o de instrumentos de confrontaci??n con el Estado.
                            </p>
                            <div class="features-icon text-center"><span class="icon-target"></span></div>
                            <h3 class="features-title font-alt text-center">Objetivos</h3>
                            <p>Se busca conocer este tipo de expresiones de la sociedad mexicana por cuanto han sido y son determinantes para la conservaci??n o el desmantelamiento de los proyectos dominantes. Asimismo, para la redefinici??n y la construcci??n de proyectos alternativos de la naci??n. Se estudia a los actores sociales que construyen a la sociedad y al Estado de una u otra manera, que a nivel regional y nacional inciden en el car??cter de nuestro entorno social y pol??tico.</p>
                            <div class="features-icon text-center"><span class="icon-search"></span></div>
                            <h3 class="features-title font-alt text-center">L??neas de investigaci??n</h3>
                            Actualmente se trabaja en las siguientes l??neas de investigaci??n:
                            <ul>
                                <li>Movimientos Sociales: de resistencia, en defensa de la vida, autonomistas, ind??genas, armados, magisteriales, estudiantiles</li>
                                <li>Sistema pol??tico</li>
                                <li>Sistema de partidos pol??ticos</li>
                                <li>Pol??tica econ??mica y social</li>
                                <li>Antropolog??a pol??tica</li>
                                <li>Secularizaci??n y pol??tica</li>
                                <li>Sociedad y Poder</li>
                                <li>Migraci??n nacional e internacional</li>
                                <li>Juventud, violencia y cultura pol??tica</li>
                                <li>Organizaciones por la justicia de v??ctimas de desaparici??n forzada</li>
                                <li>Derechos Humanos</li>
                                <li>Mujeres y prostituci??n</li>
                                <li>Cultura pol??tica de g??nero</li>
                                <li>Mercado de trabajo, empleo, subcontrataci??n laboral, intermediaci??n laboral en Jalisco</li>
                                <li>Identidad</li>
                                <li>Cultura</li>
                                <li>Medio ambiente</li>
                                <li>Globalizaci??n</li>
                                <li>Mundializaci??n</li>
                                <li>Sistema pol??tico</li>
                                <li>Movimientos sociales</li>
                                <li>Y adem??s, se tiene un Centro de Estudios Observatorio Social</li>
                                <li>Identidades</li>
                                <li>G??nero y feminismos</li>
                                <li>Secularizaci??n y restauraci??n cat??lica</li>
                                <li>Interdisciplinariedad</li>
                            </ul>
                            <h3 class="features-title font-alt text-center">Cuerpos acad??micos con sede en el DESMOS</h3>
                            <ul>
                                <li>Estado y movimientos sociales</li>
                                <li>Historia, Testimonios e Identidad social</li>
                            </ul>
                            <h3 class="features-title font-alt text-center">Otros cuerpos acad??micos a los que pertenecen investigadores del DESMOS </h3>
                            <ul>
                                <li>Cultura, pol??tica y colonialidad</li>
                                <li>Estudios Laborales y Desigualdad Social</li>
                                <li>Teor??a Cr??tica: An??lisis del Presente</li>
                                <li>Desarrollo Sustentable y Salud Ambiental</li>
                                <li>Cultura, G??nero y Relaciones Sociales</li>
                                <li>Procesos sociales, migratorios, espaciales y demogr??ficos en contextos urbanos y rurales</li>
                            </ul>
                            <h3 class="features-title font-alt text-center">Docencia</h3>
                            <p>Se cuenta con la terminal de Estudios Sociopol??ticos de la Maestr??a en Ciencias Sociales</p>
                            <h3 class="features-title font-alt text-center">Extensi??n</h3>
                            <div class="somos-extension container">
                                <div class="row">
                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a target="_blank" href="https://www.facebook.com/ObserVamos" class="extension-container bg-extension2" style="background-image: url('{{asset("/images/observatorio.jpg")}}');">

                                        </a>
                                    </div>
                                    
                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a target="_blank" href="http://www.cucsh.udg.mx/cmarti/" class="extension-container bg-extension1">
                                            <div>
                                                <img src="{{asset('images/martiheader_0.jpg')}}"/>
                                                <p>C??tedra Jos?? Mart??</p>
                                            </div>
                                        </a>
                                    </div>
                                    

                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a style="background-size:cover; justify-content: flex-end; background-image: url('{{asset("/images/catalogo.jpg")}}');" class="extension-container bg-extension2" target="_blank" href="https://docs.google.com/spreadsheets/d/1IMWvKkySg5aHb3dfXgQj-F7HJ1Cdw8qj/edit#gid=498495349">
                                            <div style="color:white; width: 100%; background:rgba(0,0,0,0.7); padding:10px;">
                                                <p class="m-0">Cat??logo de biblioteca</p>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="extension-element col-md-6 col-lg-3">
                                        <a class="extension-container bg-extension2" target="_blank" href="https://m.youtube.com/channel/UC4Bt7XtTouqXqFTmztzBELA/featured">
                                            <div>
                                                <img src="{{asset('/images/banner desmos youtube-02.jpg')}}"/>
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
        <section class="module pb-0" id="investigadores">
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
                            <h6>Linea de investigaci??n: <i>{{substr($investigador->lineasInves,0,63).'...'}}</i></h6>
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
        <section class="module" id="publicaciones">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="module-title font-alt">Publicaciones</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-6">
                        <a href="{{route('libros.index')}}" class="publicaciones-item bg-dark bg-gradient" style='background-image: url("{{asset('/images/Libros.jpg')}}")'>
                            <p class="u-non-blurred">Libros y cap??tulos</p>
                        </a>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-6" onclick="wow fadeInUp">
                        <a href="{{route('articulos.index')}}" class="publicaciones-item bg-dark bg-gradient" style='background-image: url("{{asset('/images/Revistas.jpg')}}")'>  
                            <p class="u-non-blurred">Art??culos en revistas cient??ficas</p>
                        </a >
                    </div>
                </div>
            </div>
        </section>


        <section class="module" id="divulgacion">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="module-title font-alt">Divulgaci??n</h2>

                    </div>
                </div>
                
                <div class="row multi-columns-row post-columns">
                    @foreach($divulgaciones as $divulgacion)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-20">
                                <div class="video-responsive">
                                    <iframe
                                    
                                        src="{{'https://www.youtube.com/embed/'.explode('=',$divulgacion->link)[1]}}"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="{{route('divulgaciones.show',$divulgacion->id)}}">{{$divulgacion->titulo}}</a></h2>

                                </div>
                                <div class="post-entry">
                                    <p>{!!strip_tags($divulgacion->descripcion)!!}</p>
                                </div>
                                <div class="post-more"><a class="more-link" href="{{route('divulgaciones.show',$divulgacion->id)}}">Leer m??s</a></div>
                            </div>
                        </div>
                    @endforeach   
                    
                </div>
            </div>
        </section>
        <section class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="callout-btn-box"><a class="btn btn-w btn-round" href="{{route("divulgaciones.index")}}">Ver m??s</a></div>
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
                    <p>Dr. Jaime Ezequiel Tamayo Rodr??guez</p>
                    
                    
                </div>
                <div class="contact-box">
                    <p><b>Asistente de la jefatura</b></p><br>
                    <p>Mtra. Oralia Chantal Rodr??guez Saucedo</p>
                    
    
                </div>
                <div class="contact-box">
                    <p><b>Atenci??n</b></p>
                    <p>Norma Figueroa Hern??ndez</p>
                    <p>Correo: <a href="mailto:desmos@academicos.udg.mx">desmos@academicos.udg.mx</a></p>
                    <p>Tel??fono: <a href="tel:(33) 3819-3327">(33) 3819-3327</a></p>
    
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
                                <b>Proyecto de investigaci??n en proceso: </b> {{$investigador->proyecto_invest}}
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
                            <b>Lineas de investigaci??n: </b>
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