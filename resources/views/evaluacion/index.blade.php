@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                       
                        <a class="navbar-brand" href="#pablo">Evaluación</a>
                    </div>
                </div>
            </nav>
<!-- End Navbar -->
            <div class="panel-header panel-header-sm">
</div>
            <div class="content">

<div class="row">
<div class="col-md-12">
  <div class="card card-user">
      <div class="card-header">
            <h5 class="title">Lista de Familias</h5>
      </div>
      @include('evaluacion.search')
      <table class="table">
                                                <thead class="text">
                                                    <th style="text-align: center;">N° Carnet</th>
                                                    <th style="text-align: center;">Persona</th>
                                                    <th style="text-align: center;">Tipo</th>
                                                    <th style="text-align: center;"> Modo</th>                                                   

                                                </thead>
                                                <tbody>
                                                    @foreach($familia as $fam)
                                                    <tr style="text-align: center;">
                                                        <td>{{ $fam->Fam_numero}}</td>
                                                        <td>{{ $fam->Fam_nom}}</td>
                                                        <td>{{ $fam->Tipo_Familia}}
                                                        <td >{{ $fam->Modo_Capta}}</td>
                                                        <td>
                                                            <!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
                                                            <a href="{{URL::action('evalController@show',$fam->idFamilia)}}">
                                                                <button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i>Evaluar
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
            @endsection