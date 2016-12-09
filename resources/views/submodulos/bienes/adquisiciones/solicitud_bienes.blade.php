@extends('layouts.app')

@section('content')


<!-- TODOS LOS CONTENIDOS LLEVAN EL MISMO NOMBRE DE SECCION !-->

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

                          <!-- START BREADCRUMB -->
                          <ul class="breadcrumb">
                            <li><a href="{{ url('/home') }}">Inicio</a></li>
                            <li><a href="{{ url('/bienes') }}">Bienes</a>
                              <li><a href="{{ url('/bienes/submodulo/adquisiciones') }}">Adquisiciones</a>
                              <li><a href="#" class="active">Solicitud de bienes</a>
                            </li>
                          </ul>
                          <!-- END BREADCRUMB -->
                          <ul class="mega">
                          
                            <div class="container">
                              <div class="row">

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
                          <div class="panel-title">Solicitud
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Solicitud de Bienes</h3>
                          <p>Esta sección esencial para la carga del presupuesto y permite la integración y flujo de datos adecuado para el resto de los módulos. Por favor llene con precaución.</p>
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
          
            <div class="row">
              <div class="col-md-12">

                <!-- INICIA PANEL BLANCO -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">
                      Llene los campos como se indican. Los campos con * son requeridos. 
                    </div>
                  </div>
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->
                    
                  @if(Session::has('alerta'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alerta') !!}</em></div>
                  @endif

                    <h4>Solicitud de Adquisición de Bien o Servicio</h4>
                    <h5>1. Elija la partida presupuestal</h5>
                   
                  {!! Form::open(['url' => 'bienes/submodulo/adquisiciones/solicitud_bienes']) !!}
                    <div class="" role="form">    

                      <div class="row">
                        <div class="col-sm-6"></div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>No. de Solicitud<span class="help"></span></label>
                            {!!Form::text('num_sol', null, ['class' => 'form-control', 'placeholder' => 'COMPSOL-00001']) !!}
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group required">
                           <label>Fecha de Solicitud<span class="help"></span></label>
                            {!!Form::text('fecha', null, ['class' => 'form-control', 'id' => 'datepicker-component2', 'placeholder' => '11/06/2016']) !!}
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Unidad Responsable</label>
                            {!!Form::select('ur', $claves_ur, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Funcional</label>
                            {!!Form::select('fun', $claves_fun, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Programa</label>
                            {!!Form::select('pp', $claves_pp, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>                     

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">COG Partida</label>
                            {!!Form::select('cog', $claves_cog, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Tipo de Gasto</label>
                            {!!Form::select('gasto', $claves_gas, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                                            
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Fuente de financiamiento</label>
                            {!!Form::select('ff', $claves_ff, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div>
                    </div>    <!-- END ROW -->

                      <div class="row">
                          <div class="col-sm-6">
                            <h5>2. Indique las especificaciones del bien o servicio</h5>
                        </div>
                      </div>
                  





                <div class="cardio" id="car1">

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Bien<span class="help"></span></label>
                            {!!Form::text('bien[]', null, ['class' => 'form-control', 'placeholder' => 'Nombre del bien']) !!}
                            </div>
                        </div>


                        <div class="col-sm-2">
                          <div class="form-group form-group-default required">
                            <label>Cantidad<span class="help"></span></label>
                            {!!Form::text('medida[]', null, ['class' => 'form-control', 'placeholder' => 'kg/lt/mt']) !!}
                            </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default required">
                            <label>Cantidad<span class="help"></span></label>
                            {!!Form::text('cantidad[]', null, ['class' => 'form-control', 'placeholder' => 'Número']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Marca<span class="help"></span></label>
                            {!!Form::text('marca[]', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
                            </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default required">
                            <label>Precio Cotizado<span class="help"></span></label>
                            {!!Form::text('precio[]', null, ['class' => 'form-control price', 'placeholder' => 'Precio']) !!}
                            </div>
                        </div>
                      </div> <!-- END ROW  -->

                      <div class="row">                      
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Características<span class="help"></span></label>
                              {!!Form::text('carac[]', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
                              </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Justificación<span class="help"></span></label>
                              {!!Form::text('just[]', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
                              </div>
                          </div>
                        </div> <!-- END ROW -->
                        <br>
                    </div>

                        <div class="row">
                          <div class="action col-md-12">
                            <a href="#" id="cardio" class="btn btn-complete">+</a>
                            <a href="#" id="-cardio" class="btn btn-complete">-</a>
                          </div>
                        </div> <!-- END ROW -->
                        <br>
                        <br>

                        <div class="row">
                          <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Importe a comprometer<span class="help"></span></label>
                            {!!Form::number('imp_comp', null, ['class' => 'autonumeric form-control', 'step' => 'any', 'id' => 'totalPrice']) !!}
                            </div>
                          </div>
                        </div>


                    {!!Form::submit('Generar solicitud',['class' => 'btn btn-success show-notification'])!!}
                                            
                    {!! Form::close() !!}                     

                    </div>
                  </div> <!-- END FORM -->
                </div> <!-- DIV "panel body" - NO BORRAR" -->
              </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->


<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection

@section('script_page')

    <!-- BEGIN VENDOR JS -->

    <script src="{{ URL::asset('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-autonumeric/autoNumeric.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/summernote/js/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>


    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ URL::asset('assets/js/form_elements.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/notifications.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->

<script>
$('.price').keyup(function () {
    var sum = 0;    
    $('.price').each(function() {
        sum += Number($(this).val());
    });
    $('#totalPrice').val(sum.toFixed(2));
     
});
</script>
<script type="text/javascript"> 

      $('#price').live('keyup', function (event) {
        var value=$('#price').val();

      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var newvalue=value.replace(/,/g, '');   
      var valuewithcomma=Number(newvalue).toLocaleString('en');   
      $('#price').val(valuewithcomma); 

      });
</script>


<script type="text/JavaScript">
$(document).on('ready', function(){
  $('#cardio').on('click', function(e){
  e.preventDefault();
  // get the last DIV which ID starts with ^= "car"
  var div = $('div[id^="car"]:last');

  // Read the Number from that DIV's ID (i.e: 3 from "car3")
  // And increment that number by 1
  var num = parseInt(div.prop("id").match(/\d+/g), 10) +1;

  // Clone it and assign the new ID (i.e: from num 4 to ID "car4")
  var klon = div.clone().prop('id', 'car'+num ).insertAfter(div).find("input[type='text']").val("");
  $('div[id^="car"]:last label').remove(); //qui removemos las label para que no vuelvan a aparecer
  });



  //con esta funcion evitamos que se borre el campo, es decir, al menos debe de haber un una linea de cada campo

  $('#-cardio').on('click', function(e){
    e.preventDefault();
    if($('div[id^="car"]:last').attr('id') != 'car1') $('div[id^="car"]:last').remove();
  });


  $('#boton').on('click', function(e){
    //aqui se asignan las variables que se van a mandar con el post y el metodo Ajax de jquery
    e.preventDefault();
    var bien = valores($("input[name^='bien']"));
    var cantidad = valores($("input[name^='cantidad']"));
    var marca = valores($("input[name^='marca']"));

    var $inputs = $('#myForm :input');

      // not sure if you wanted this, but I thought I'd add it.
      // get an associative array of just the values.
      var values = {};
      $inputs.each(function() {
          values[this.name] = $(this).val();
      });
      
        console.log(Excercise_T);
      
    $.ajax({
      //metodo Ajax de jquery
        type: "POST", //peticion post
        url: "{{ url('bienes/submodulo/adquisiciones/solicitud_bienes') }}", //url a la que se envian los datos
        data: {values, bien, cantidad, marca}, //datos que se envian
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}, //el token de seguridad de laravel
        success: function() {
          //si el guardado es correcto y la peticion sale bien se ejecuta este codigo
          alert('datos guardados correctamente');
          //con esta funcion se resetea el forulario
          $('#myForm').each (function(){
            this.reset();
        });
        }
    });
  });
}); 
</script>

<script>
  //functions
  //con esta funcion obtenemos todos los campos que fueron creados dinamicamente... dependiendo el selector que ocupemos
  function valores(input_array){
    /* var values2 = $("input[name^='Excercise_T']")
              .map(function(){return $(this).val();}).get();*/
    return input_array.map(function(){return $(this).val();}).get();
  }
</script>


@stop

