  <div class="modal fade" id="sulfatoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-notice">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                                <h5 class="modal-title" id="myModalLabel">Sulfato Ferroso</h5>
                              </div>
                              <div class="modal-body">
                                 <table class="table-bordered responsive">
                                       <thead>
                                         <tr>
                                          @foreach($chequeo as $che)
                                          @if ($che->Tipo_Chequeo_idTipo_Chequeo == 3)
                                          <th scope="col" style="font-size: 2;" class="vertical">{{$che->Chequeo_nom}}</th>
                                          @endif
                                          @endforeach                                       
                                       </tr>
                                      </thead>
                                   <tbody>
                                      <tr>
                                         @foreach($chequeo as $che)
                                         @if ($che->Tipo_Chequeo_idTipo_Chequeo == 3)
                                         <th><input type="date" name="Nino_hcfecha[]" class="form-control"></th>
                                         <input type="hidden" name="Chequeo_idChequeo[]" value="{{$che->idChequeo}}">
                                         @endif
                                         @endforeach   
                                      </tr>
   
                                   </tbody>
                                   </table>
                              </div>
                              <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Registrar</button>
                              </div>
                            </div>
                          </div>
                        </div>