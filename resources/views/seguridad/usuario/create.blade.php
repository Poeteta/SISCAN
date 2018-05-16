@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo">USUARIOS</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
              </span>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
            <i class="now-ui-icons media-2_sound-wave"></i>
                        <p>
              <span class="d-lg-none d-md-block">Stats</span>
            </p>
                    </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_world"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Some Actions</span>
                        </p>
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
            <i class="now-ui-icons users_single-02"></i>
                      <p>
              <span class="d-lg-none d-md-block">Account</span>
            </p>
                    </a>
                    </li>
                </ul>
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
                        <div class="form-group{{ $errors->has('Nom_per') ? ' has-error' : '' }}">
                            <label>Nombre</label>
                            <input id="Nom_per" type="text" class="form-control" name="Nom_per"> @if ($errors->has('Nom_per'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Nom_per') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Apel_pater') ? ' has-error' : '' }}">
                            <label>Apellido Paterno</label>
                            <input id="Apel_pater" type="text" class="form-control" name="Apel_pater"> @if ($errors->has('Apel_pater'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Apel_pater') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Apel_mat') ? ' has-error' : '' }}">
                            <label>Apellido Materno</label>
                            <input id="Apel_mat" type="text" class="form-control" name="Apel_mat"> @if ($errors->has('Apel_mat'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Apel_mat') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Sexo</label>
                            <select name="Sexo" class="form-control">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Fecha_nac') ? ' has-error' : '' }}">
                            <label>Fecha de Nacimiento</label>
                            <input id="Fecha_nac" type="date" class="form-control" name="Fecha_nac"> @if ($errors->has('Fecha_nac'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Fecha_nac') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('DNI') ? ' has-error' : '' }}">
                            <label>N° DNI</label>
                            <input id="DNI" type="text" class="form-control" name="DNI"> @if ($errors->has('DNI'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('DNI') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Distrito</label>
                            <select name="Distrito_idDistrito" class="form-control border-input">
                                @foreach($distritos as $dis)
                                <option value="{{$dis->idDistrito}}">{{$dis->Nom_Dist}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('Direccion') ? ' has-error' : '' }}">
                            <label>Direccion</label>
                            <input id="Direccion" type="text" class="form-control border-input" name="Direccion"> @if ($errors->has('Direccion'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Direccion') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
                            <label>N° Telefono</label>
                            <input id="Telefono" type="text" class="form-control border-input" name="Telefono"> @if ($errors->has('Telefono'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('Telefono') }}</strong>
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
                                <option value="{{$r->idRol}}">{{$r->Nom_rol}}</option>
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
                                    <button class="btn btn-danger pull-left" type="reset" ><a href="/seguridad/usuario">Cancelar</a></button>
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