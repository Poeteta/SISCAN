@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
            
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
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-2 col-lg-2">
                            <a href="usuario/create">
                                <button class="btn btn-success" style="margin-bottom: 20%;"><i class=" glyphicon glyphicon-plus"></i> Nuevo</button>
                            </a>
                        </div></div>
                    	 @include('seguridad.usuario.search')


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text">
                                                    <th>Persona</th>
                                                    <th style="text-align: center;">Usuario</th>
                                                   
                                                    <th style="text-align: center;">Telefono</th>
                                                    <th style="text-align: center;">DNI</th>
                                                    <th style="text-align: center;">Rol</th>
                                            
                                                    <th style="text-align: center;">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($usuario as $usu)
                                                    <tr >
                                                        <td style="float: left;">{{ $usu->Usuario_nombre.' '.$usu->Usuario_apelpa.' '.$usu->Usuario_Apelma}}</td>
                                                        <td style="text-align: center;">{{ $usu->Nom_user}}</td>
                                                        <td style="text-align: center;">{{ $usu->Usuario_telf}}</td>
                                                        <td style="text-align: center;">{{ $usu->Usuario_dni}}</td>
                                                        <td style="text-align: center;">{{ $usu->Rol_nom}}</td>
                                                        
                                                        <td>
                                                            <!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
                                                            <a href="{{URL::action('UsuarioController@show',$usu->idUsuario)}}">
                                                                <button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Editar Trabajador
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        {{$usuario->render()}}   
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