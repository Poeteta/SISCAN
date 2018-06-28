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
                <a class="navbar-brand" href="#pablo">TRABAJADORES</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
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
    <div class="panel-header">
        <div class="header text-center">
            <h2 class="title">Lista de Trabajadores</h2>
        </div>
    </div>
    <div class="content">

        <div class="row">

            <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-calendar">
                    <div class="card-body ">
                        <div class="col-md-2 col-lg-2">
                            <a href="usuario/create">
                                <button class="btn btn-success"><i class=" glyphicon glyphicon-plus"></i> Nuevo</button>
                            </a>
                        </div>
                    	 @include('seguridad.usuario.search')


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>Persona</th>
                                                    <th>Usuario</th>
                                                   
                                                    <th>Telefono</th>
                                                    <th>DNI</th>
                                                    <th>Rol</th>
                                            
                                                    <th>Opciones</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($personas as $per)
                                                    <tr>
                                                        <td>{{ $per->Nom_per.' '.$per->Apel_pater.' '.$per->Apel_mat}}</td>
                                                        <td>{{ $per->Nom_user}}</td>
                                                    
                                                        <td>{{ $per->Telefono}}</td>
                                                        <td>{{ $per->DNI}}</td>
                                                        <td>{{ $per->Nom_rol}}</td>
                                                        
                                                        <td>
                                                            <!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
                                                            <a href="{{URL::action('UsuarioController@show',$per->idPersona)}}">
                                                                <button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Editar Trabajador
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-header panel-header-sm">
            </div>
            @endsection