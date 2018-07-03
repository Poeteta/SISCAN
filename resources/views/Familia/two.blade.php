
    <div class="card-body hide" id="second" style="border: dotted; left: 105%; top: 8%; position: absolute; background-color: #FFFF;">
                            <div class="tab-content" >
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">Historia Clinica</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" style="border: none;border-bottom: 2px dotted black;" name="Nino_hc[]">
                                                </div>
                                            </div>
                                            <label class="col-md-2 col-form-label">DNI</label>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="" style="border: none;border-bottom: 2px dotted black;"
                                                    name="Nino_dni[]">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>
                                 <div class="row">
                                        <label class="col-md-4 col-form-label">Nombres</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;"
                                                name="Nino_nom[]">
                                            </div>
                                        </div>
                                </div>
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">Fecha Nacimiento</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="date" class="" style="border: none;border-bottom: 2px dotted black;" name="Nino_fechan[]">
                                                </div>
                                            </div>
                                            <label class="col-md-2 col-form-label">Sexo</label>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <select name="Nino_sexo[]">
                                                        <option value="M">M</option>
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>


                                     <div style="border:none; border-bottom:2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>VACUNAS (Según Edad)</strong></label>
                                    </div>
                                    <br>
                                    @foreach($chequeo as $che)
                                    @if ($che->Tipo_Chequeo_idTipo_Chequeo == 1)
                                    <div class="row">

                                        <label class="col-md-3 col-form-label">{{$che->Chequeo_nom}}</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                              <span class="btn-group" data-toggle="buttons-radio">
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" />
                                                 </span>
                                            </span>
                                                <input type="hidden" name="Chequeo_idChequeo[]" value="{{$che->idChequeo}}">
                                                <input type="date" class="" name="Nino_hcfecha[]" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                        
                                    <div style="border:none; border-bottom:2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>CONTROL NUTRICIONAL</strong></label>
                                    </div>
                                    <table class="table-bordered" id="cntable2">
                                       <thead>
                                         <tr>
                                          <th scope="col" style="font-size: 2;">N° Evaluación</th>
                                          <th scope="col">Edad</th>
                                          <th scope="col">Peso</th>
                                          <th scope="col">Talla</th>
                                          <th scope="col">Hb/Hto</th>
                                          <th scope="col">Observacion</th>
                                          <th><a class="" type="btn-success" id="addcn2"><i class="now-ui-icons ui-1_simple-add"></i></a>
                                       </tr>
                                      </thead>
                                   <tbody>
                                      <tr>
                                         <td><input type="text" name="Cn_fecha[]" class="form-control"></td>
                                         <td><input type="number" name="Cn_edad[]" class="form-control"></td>
                                         <td><input type="number" name="Cn_peso[]" class="form-control"></td>
                                         <td><input type="number" name="Cn_talla[]" class="form-control"></td>
                                         <td><input type="number" name="Cn_hb_hto[]" class="form-control"></td>
                                         <td><input type="text" name="Cn_Observacion[]" class="form-control"></td>
                                      </tr>
   
                                   </tbody>
                                   </table>
                                   <br>
                                   <div style="border:none;  border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label"><strong>MICRONUTRIENTES (Niños menores 3 años)</strong></label>
                                    </div>
                               
                                    <div class="row">

                                        <div class="col-md-9">
                                              <div class="form-group">
                                                <button type="button" class="btn btn-default btn-sm" data-color="primary"
                                                data-toggle="modal" data-target="#noticeModal2">Abrir Micronutrientes</button>
                                            </div>
                                        </div>
                                     


                                    </div>
                                    <div style="border:none;  border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label"><strong>SULFATO FERROSO</strong></label>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-9">
                                              <div class="form-group">
                                                <button type="button" class="btn btn-default btn-sm" data-color="primary"
                                                data-toggle="modal" data-target="#sulfatoModal2">Abrir Sulfato</button>
                                            </div>
                                        </div>
                                     </div>
                                  

                                     <div style="border:none;  border-bottom: 2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>PROBLEMAS DE SALUD</strong></label>
                                    </div>
                                     <table class="table-bordered" id="saludtable2">
                                       <thead>
                                        <tr>
                                          <th >Enfermedad</th>
                                          <th >Fecha</th>
                                          <th colspan="2">Atendido</th>
                                          <th >HH</th>
                                          <th >Otro</th>
                                          <th><a class="" type="btn-success" id="addpsalud2"><i class="now-ui-icons ui-1_simple-add"></i></a>

                                       </tr>
                                         <tr>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col">SI</th>
                                          <th scope="col">NO</th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                       </tr>
                                      </thead>
                                   <tbody>
                                      <tr>
                                         <td><input type="text"  class="form-control"></td>
                                         <td><input type="date"  class="form-control "></td>
                                         <td><input type="radio"  value="1" id="atendido" class="form-control"></td>
                                         <td><input type="radio"  value="0" id="atendido" class="form-control"></td>
                                         <td><input type="radio"  value="Huaycan" id="Problema" class="form-control"></td>
                                         <td><input type="radio"  value="Otro" id="Problema" class="form-control"></td>
                                      </tr>
   
                                   </tbody>
                                   </table>

                            

                            </div>
                          </div>
                        </div>


                            <script>

        var tbodyc = $('#saludtable2').children('tbodyc');
        var tablec = tbodyc.length ? tbodyc : $('#saludtable2');
        $('#addpsalud2').click(function(){
            tablec.append('<tr><td><input type="text" name="Problema_enfermedad[]" class="form-control"></td><td><input type="date" name="Problema_fecha[]" class="form-control"></td><td><input type="radio" name="Problema_atendido[]" value="1" id="atendido" class="form-control"></td><td><input type="radio" name="Problema_atendido[]" value="0" id="atendido" class="form-control"></td><td><input type="radio" name="Problema_hospital[]" value="Huaycan" id="Problema" class="form-control"></td><td><input type="radio" name="Problema_hospital[]" value="Otro" id="Problema" class="form-control"></td></tr>');
        })

        var tbodyd = $('#cntable2').children('tbodyd');
        var tabled = tbodyd.length ? tbodyd : $('#cntable2');
        $('#addcn2').click(function(){
            tabled.append('<tr><td><input type="text" name="Cn_fecha[]" class="form-control"></td><td><input type="number" name="Cn_edad[]" class="form-control"></td><td><input type="number" name="Cn_peso[]" class="form-control"></td><td><input type="number" name="Cn_talla[]" class="form-control"></td><td><input type="number" name="Cn_hb_hto[]" class="form-control"></td><td><input type="text" name="Cn_Observacion[]" class="form-control"></td></tr>');
        })


    </script>
    

    <div class="modal fade" id="noticeModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-notice">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                                <h5 class="modal-title" id="myModalLabel">Micronutrientes</h5>
                              </div>
                              <div class="modal-body">
                                <div id="writing-mode">
                          <table>
                                 @foreach($chequeo as $che)
                                 @if ($che->Tipo_Chequeo_idTipo_Chequeo == 2)
                                <tr>
                                 <th>{{$che->Chequeo_nom}}</th>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;><th><input type="date" name="Nino_hcfecha[]" class="form-control"></th><input type="hidden" name="Chequeo_idChequeo[]" value="{{$che->idChequeo}}"></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td> 
                               </tr>
                                 @endif
                                @endforeach  
                         </table>
                               </div>
                              </div>
                              <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Registrar</button>
                              </div>
                            </div>
                          </div>
                        </div>


    <div class="modal fade" id="sulfatoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-notice">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                                <h5 class="modal-title" id="myModalLabel">Sulfato Ferroso</h5>
                              </div>
                              <div class="modal-body">
                                   <div id="writing-mode">
                          <table>
                                 @foreach($chequeo as $che)
                                 @if ($che->Tipo_Chequeo_idTipo_Chequeo == 3)
                                <tr>
                                 <th>{{$che->Chequeo_nom}}</th>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;><th><input type="date" name="Nino_hcfecha[]" class="form-control"></th><input type="hidden" name="Chequeo_idChequeo[]" value="{{$che->idChequeo}}"></td>
                                 <td contenteditable="true" ;></td>
                                 <td contenteditable="true" ;></td> 
                               </tr>
                                 @endif
                                @endforeach  
                         </table>
                               </div>
                              </div>
                              <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Registrar</button>
                              </div>
                            </div>
                          </div>
                        </div>