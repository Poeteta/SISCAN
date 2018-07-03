@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">USUARIOS</a>
            </div>
            
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card f-b">
              <div class="card-header">
                                <h5 class="title">Nuevo Usuario</h5>
                            </div>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif {!!Form::open(array('url'=>'seguridad/usuario','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}} {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Usuario_nombre') ? ' has-error' : '' }}">
                            <label>Nombre</label>
                            <input id="Usuario_nombre" type="text" class="form-control" name="Usuario_nombre"> @if ($errors->has('Usuario_nombre'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Usuario_nombre') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Usuario_apelpa') ? ' has-error' : '' }}">
                            <label>Apellido Paterno</label>
                            <input id="Usuario_apelpa" type="text" class="form-control" name="Usuario_apelpa"> @if ($errors->has('Usuario_apelpa'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Usuario_apelpa') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Usuario_Apelma') ? ' has-error' : '' }}">
                            <label>Apellido Materno</label>
                            <input id="Usuario_Apelma" type="text" class="form-control" name="Usuario_Apelma"> @if ($errors->has('Usuario_Apelma'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Usuario_Apelma') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
             <div class="col-md-2">
                        <div class="form-group{{ $errors->has('Usuario_telf') ? ' has-error' : '' }}">
                            <label>N° Telefono</label>
                            <input id="Usuario_telf" type="text" class="form-control border-input" name="Usuario_telf"> @if ($errors->has('Usuario_telf'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Usuario_telf') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Usuario_fechan') ? ' has-error' : '' }}">
                            <label>Fecha de Nacimiento</label>
                            <input id="Usuario_fechan" type="date" class="form-control" name="Usuario_fechan"> @if ($errors->has('Usuario_fechan'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Usuario_fechan') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Usuario_dni') ? ' has-error' : '' }}">
                            <label>N° DNI</label>
                            <input id="Usuario_dni" type="text" class="form-control" name="Usuario_dni"> @if ($errors->has('Usuario_dni'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Usuario_dni') }}</strong>
                                    </span> @endif
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Nom_user') ? ' has-error' : '' }}">
                            <label>Nombre de Usuario</label>
                            <input id="Nom_user" type="text" class="form-control border-input" name="Nom_user" value="{{ old('Nom_user') }}"> @if ($errors->has('Nom_user'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Nom_user') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Rol</label>
                            <select name="Rol_idRol" class="form-control border-input">
                                @foreach($roles as $r)
                                <option value="{{$r->idRol}}">{{$r->Rol_nom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Contraseña</label>
                            <input id="password" type="password" class="form-control border-input" name="password"> @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label>Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control border-input" name="password_confirmation">

                        </div>
                        <div class="row">
                            <div class="content">
                                <div class="form-group">
                                    <button class="btn btn-primary pull-right" type="submit">Guardar</button>
                                    <button class="btn btn-warning pull-left" type="reset" ><a href="/seguridad/usuario">Cancelar</a></button>
                                </div>
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
@endsection