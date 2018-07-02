 @extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" >Evaluación</a>
                    </div>
                    
                </div>
            </nav>
<!-- End Navbar -->
            <div class="panel-header panel-header-sm">
</div>
            <div class="content">

<div class="row">
    <div class="col-md-3"></div>
<div class="col-md-6">
<div class="card" style="border: 2px solid black; ">
        {{Form::Open(array('action'=>array('evalController@store'),'method'=>'POST'))}}
        {{Form::token()}} {{ csrf_field() }}


      <div class="card-header">
          <h5 class="title">Evaluacion Final de la Familia: {{$family->Fam_nom}}
        </h5>
           <div class="" id="account">
                <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                       
                                    </div>
                                    

                                      <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>CRITERIOS DE EVALUACION</strong></label>
                                      </div>

                                       <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">1. ASISTENCIA A SESIONES</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Asis" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Asis" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">2. NIÑOS CON VACUNAS COMPLETAS SEGÚN EDAD</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Nino_Vac" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Nino_Vac" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">3. NIÑO SIN DESNUTRICION Y ANEMIA NI ANEMIA EN LOS ULTIMOS 3 MESES</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Nino_SinAne" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Nino_SinAne" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">4. CONTROL PRENATAL</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Cpn" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Cpn" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">5. LA GESTANTE Y SU FAMILIA RECONOCEN LOS SIGNOS DE ALARMA DEL EMBARAZO</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Signos_Alarma" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Signos_Alarma" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">6. PLANIFICACIÓN FAMILIAR</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Plan_Fam" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Plan_Fam" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">7. FAMILIA CON PLAN FAMILIAR</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Usa_Plan_Fam" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Usa_Plan_Fam" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">8. FAMILIA QUE PARTICIPA EN ACTIVIDADES COMUNALES</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Activ_Comun" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Activ_Comun" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">9. FAMILIA CON NORMAS DE CONVIVENCIA PARA VIVIR EN ARMONIA</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Norm_Conv" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Norm_Conv" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">10. FAMILIA QUE PRACTICA VALORES</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Valores" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Valores" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">11. FAMILIA CON PRACTICAS SALUDABLES QUE PROTEGEN SU SALUD</label>

                                        <div class="col-md-4">
                                        <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Pract_Salud" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Pract_Salud" />
                                                 </span>
                                            </span>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">12. ACUDE AL HOSPITAL DE HUAYCAN</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Acude_Hosp" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Acude_Hosp" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">13. VIVIENDA VENTILADA, LIMPIA Y ORDENADA</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Viv_Ordena" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Viv_Ordena" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">14. HUERTO IMPLEMENTADO- ARBOL PLANTADO</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Arbol" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Arbol" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-8 col-form-label" style="padding-left: 8%">15. DEPOSITOS DE AGUA ADECUADAMENTE LAVADOS Y TAPADOS</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Eval_Depo_Agua" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Eval_Depo_Agua" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div style="border:none;  border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>CONDICION DE LA FAMILIA</strong></label>
                                    </div>
                                     <div class="article-container">
                        
                                    <div class="article" >
                                       <label style="padding-left: 35%;"><strong>FAMILIA SALUDABLE</strong></label>

                                         <div class="col-md-4" style="margin-left: 35%;">
                                            <div class="form-group">
                                                    <span class="btn-group" data-toggle="buttons-radio">
                                                            <span class="button-checkbox">
                                                            <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                            <input type="checkbox" hidden="" value="1" name="Estado_Eval" />
                                                            </span>
                                                           <br>
                                                           <br>
                                                           <span class="button-checkbox">
                                                            <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                            <input type="checkbox" hidden="" value="0" name="Estado_Eval" />
                                                            </span>
                                                       </span>
                                            </span>
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="article">

                                       <label style="padding-left: 40%;"><strong>ABANDONO</strong></label>

                                        <div class="col-md-4" style="margin-left: 27%;">
                                            <div class="form-group">
                                               <input type="text" class="" name="Abandono" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                            
                                        </div>
                                        <input type="hidden" value="{{$family->idFamilia}}" name="Familia_idFamilia"/>
                                            <input type="submit" style="margin-left: 70%;" class='btn btn-info btn-fill btn-rose btn-wd' name="Save" value='Guardar' />
                                     </div>
                                  </div>

                                </div>
      </div>
      {!!Form::close()!!}
  
  </div>
</div>
</div>

            </div>         
    </div>
    
  </div>
  <script type="text/javascript">
      $(function () {
    $('.button-checkbox').each(function () {
        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };
        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });
        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');
            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");
            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);
            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }
        // Initialization
        function init() {
            updateDisplay();
            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
  </script>
  

            @endsection