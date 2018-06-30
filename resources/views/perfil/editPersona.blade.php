<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-editPersona-{{$usuarioshow->idUsuario}}">
    {{Form::Open(array('action'=>array('PerfilController@updatePersona',$usuarioshow->idUsuario),'method'=>'patch'))}}
     {!! csrf_field() !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">{{$usuarioshow->Usuario_nombre.' '.$usuarioshow->Usuario_apelpa.' '.$usuarioshow->Usuario_Apelma}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>DNI</label>
                            <input type="text" class="form-control border-input" name="Usuario_dni" value="{{$usuarioshow->Usuario_dni}}">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control border-input" name="Usuario_nombre" value="{{$usuarioshow->Usuario_nombre}}">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control border-input" name="Usuario_telf" value="{{$usuarioshow->Usuario_telf}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" class="form-control border-input" name="Usuario_apelpa" value="{{$usuarioshow->Usuario_apelpa}}">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Apellido Materno</label>
                            <input type="text" class="form-control border-input" name="Usuario_Apelma" value="{{$usuarioshow->Usuario_Apelma}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input id="Usuario_fechan" type="date" class="form-control border-input" name="Usuario_fechan" value="{{$usuarioshow->Usuario_fechan}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
        {{Form::Close()}}
    </div>
</div>