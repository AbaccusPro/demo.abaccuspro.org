@extends('layouts.app')

@section('content')  <!-- TODOS LOS CONTENIDOS LLEVAN EL MISMO NOMBRE DE SECCION !-->

<!-- NO MOVEER NINGÚN DIV !-->
<div class="fixed-header horizontal-menu">  

  <div class="page-content-wrapper">
    <div class="content sm-gutter">            
     <div class="container-fluid">
     
             <div class="bar">
                    <div class="pull-right">
                      <a href="#" class="text-black padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10 on" data-pages="horizontal-menu-toggle">
                        <i class=" pg-close_line"></i>
                      </a>
                    </div>

<!-- NO MOVEER NINGÚN DIV !-->

                     <div class="bar-inner">
                      <ul>
                        <li class="mega">
                          <a href="javascript:;">
                          <span class="sub-menu-heading bold">Acceso Rápido</span><span class="arrow"></span>
                        </a>
                          <ul class="mega">
                            <div class="container">
                              <div class="row">

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">                                    
                                    <li ><a href="#">1/ Banca electrónica</a></li>
                                    <li ><a href="#">2/ Conciliación bancaria</a></li>
                                    <li ><a href="#">3/ Pre cierre mensual y Cierre del mes</a></li>
                                    <li ><a href="#">4/ Estado Analítico de Ingresos Presupuestales</a></li>
                                    <li ><a href="#">5/ Cuentas por Pagar</a></li>
                                    <li ><a href="#">6/ Emisión de Pagos</a></li>
                                  </ul>                                  
                                </div>

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">                                    
                                    <li ><a href="#">7/ Programación de Pagos</a></li>
                                    <li ><a href="#">8/ Fondo Revolvente</a></li>
                                    <li ><a href="#">9/ Viáticos</a></li>
                                    <li ><a href="#">10/ Gestión de Cadenas Productivas</a></li>
                                    <li ><a href="#">11/ Registro del control presupuestal</a></li>
                                    <li ><a href="#">12/ Pronóstico de flujos de efectivo</a></li>
                                    <li ><a href="#">13/ Cierre de anual</a></li>
                                  </ul>                                  
                                </div>

                              </div> <!-- END DIV ROW -->
                            </div>
                          </ul>
                        </li>
                      </ul>
               
                </div> <!-- DIVS SUB-MENU -->
              </div> <!-- DIVS SUB-MENU -->

      <div class="page-content-wrapper ">
          
<!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/planeacion') }}">Tesoreria</a>
                  <li><a href="#" class="active">Manuales y Procesos</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Herramientas
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Manuales y Procesos</h3>
                          <p>En esta sección podrá encontrar los manuales relacionados al proceso de armonización contable de cada área y sub-área</p>
                          <br>
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- END JUMBOTRON -->

<!-- CHANGE 'content' HERE-->

          <!-- AQUÍ INICIA EL PANEL PRINCIPAL -->

                      <!-- START CONTAINER FLUID -->
                      <div class="container-fluid container-fixed-lg">
                        <div class="row">
                          <div class="col-sm-6">

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <div class="panel-title">Manuales del área
                                </div>
                              </div>
                              <div class="panel-body">
                                <p>Aquí podrá encontrar los manuales organizados de acuerdo al organigrama de su institución.</p>
                                <div id="drag-tree">
                                  <ul id="dragTreeData" class="hidden">
                                    <li id="idt1" title="Este es un Manual Principal">Manual de armonización contable y el área de planeación</li>
                                    <li id="idt1" title="Este es un Manual Principal">Manual de procesos del área</li>
                                    <li class="folder" id="idt3">Jefatura
                                      <ul>
                                        <li id="idt3.1">Área 1
                                          <ul>
                                            <li id="idt3.1.1">Manual 1.1</li>
                                            <li id="idt3.1.2">Manual 1.2</li>
                                          </ul>
                                        </li>
                                        <li id="idt3.2">Área 2
                                          <ul>
                                            <li id="idt3.2.1">Manual 2.1</li>
                                            <li id="idt3.2.2">Manual 2.2</li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li class="expanded" id="idt4">Area 3 (expandido al inicio)
                                      <ul>
                                        <li class="active focused expanded" id="idt4.1">
                                          Subárea 3.1 (activo al inicio)
                                          <ul>
                                            <li id="idt4.1.1">Manual 3.1.1</li>
                                            <li id="idt4.1.2">Manual 3.1.2</li>
                                          </ul>
                                        </li>
                                        <li class="expanded" id="idt4.2">Subárea 3.2
                                          <ul>
                                            <li id="idt4.2.1">Manual 3.2.1</li>
                                            <li id="idt4.2.2">Manual 3.2.2</li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          


<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->
        </div> <!-- DIV "container-fluid" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection


@section('script_page')

    <script src="{{ URL::asset('assets/plugins/jquery-dynatree/jquery.dynatree.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/tree_view.js') }}" type="text/javascript"></script>

@stop