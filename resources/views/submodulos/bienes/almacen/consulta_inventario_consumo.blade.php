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
                      <div class="container">

                        <div class="row">
                          <div class="col-md-8 ">
                            <ul class="breadcrumb">
                              <li><a href="{{ url('/home') }}">Inicio</a></li>
                              <li><a href="{{ url('/bienes') }}">Bienes</a>
                              <li><a href="{{ url('/bienes/submodulo/almacen') }}">Almacén</a>
                              <li><a href="#" class="active">Consulta de Inventario</a>
                              </li>
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

                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Bandeja de entrada
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Consulta de Inventario</h3>
                          <p>En esta sección podrá consultar las autorizaciones pendientes provenientes de otras áreas.</p>
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


          <!-- START CONTAINER FLUID -->
          <div class"row">

            <!-- START PANEL -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-title">Bandeja de Entrada a Inventario
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <table class="table table-hover demo-table-search" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>Bien</th>
                      <th>Clave del Bien</th>
                      <th>Clave presupuestal</th>
                      <th>Fecha de Entrada</th>
                      <th>Folio Orden de Compra</th>
                      <th>Fecha de factura</th>
                      <th>Folio de factura</th>
                      <th>Proveedor</th>
                      <th>Cantidad</th>
                      <th>Total</th>
                      <th>Características</th>
                    </tr>
                  </thead>
                    <tbody>                        
                    @foreach ($bien_sub4_1 as $bien_sub4_1)
                      <tr class="even gradeC">
                        <td><a href="{{ url('bienes/submodulo/almacen/entrada', $bien_sub4_1->id) }}">{{$bien_sub4_1->bien}}</td></a>
                        <td>{{ $bien_sub4_1->cve_bien }}</td>
                        <td>{{ $bien_sub4_1->cve_presup }}</td>
                        <td>{{ $bien_sub4_1->fecha_ent }}</td>
                        <td>{{ $bien_sub4_1->folio_compra }}</td>
                        <td>{{ $bien_sub4_1->fecha_fact }}</td>
                        <td>{{ $bien_sub4_1->folio_fact }}</td>
                        <td>{{ $bien_sub4_1->proveedor }}</td>
                        <td>{{ $bien_sub4_1->cantidad }}</td>
                        <td>${{ number_format($bien_sub4_1->total,2) }}</td>
                        <td>{{ $bien_sub4_1->carac }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>

          </div> <!-- DIV "panel body" - NO BORRAR" -->
                

<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection

@section('script_page')

    <!-- BEGIN VENDOR JS -->

    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ URL::asset('assets/js/datatables.js') }}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS -->


@endsection
