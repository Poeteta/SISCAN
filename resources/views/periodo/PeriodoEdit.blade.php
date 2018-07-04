<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-periodoedit-{{$peri->idPeriodo_Programa}}">
    {{Form::Open(array('action'=>array('PeriodoController@update',$peri->idPeriodo_Programa),'method'=>'patch'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
            </div>
            <div class="modal-body">
                <div class="row">
                                            
                                            <div class="col-md-12" style=" margin-top: 10%; margin-bottom: 5%; text-align: center;">
                                                <h3>Registro Periodo</h3>
                                                <div>
                                                    <h5 >Fecha Apertura:</h5>
                                                    <input style="margin-bottom: 10%; border:3px solid black ;" value="{{ $peri->Fecha_Inicio}}" name="Fecha_Inicio" type="date" placeholder="Fecha Inicio">
                                                </div>
                                                <div>
                                                    <h5>Fecha Final:</h5>
                                                    <input style="margin-bottom: 10%; border: 3px solid black ;" value="{{ $peri->Fecha_Fin}}" name="Fecha_Fin" type="date" placeholder="Fecha Fin">
                                                </div>
                                                <div>
                                                    
                                                    <button class="btn btn-success" type="submit" style="margin-bottom: 5%; margin-left: 40%;">Actualizar</button>
                                                </div>


                                            </div>
                                            
                                        </div>

            </div>
        </div>
        {{Form::Close()}}
    </div>
</div>