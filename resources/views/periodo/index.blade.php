@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<div class="main-panel">
    <!-- Navbar -->
   
    <!-- End Navbar -->
    <div style="height: 20%;" class="panel-header">
        <div class="header text-center">
            <h2 class="title">Lista de Periodos</h2>
        </div>
    </div>
    <div class="content">

        <div class="row">

            <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-calendar">
                    <div class="card-body">
                        <div class="row">
                            <!--<div class="col-md-2 col-lg-2">
                                <button class="btn btn-success" id="periodomodal" style="margin-bottom: 20%;"><i class=" glyphicon glyphicon-plus"></i> Nuevo</button>
                            </div>-->
                            <a href="#nuevoperiodo" style="margin-left: 5%;" class="btn btn-success btn lg" data-toggle="modal">Nuevo</a>
                            <div class="modal fade" id="nuevoperiodo">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        {{Form::Open(array('action'=>array('PeriodoController@store'),'method'=>'POST'))}}
                                        <div class="row">
                                            
                                            <div class="col-md-12" style=" margin-top: 10%; margin-bottom: 5%; text-align: center;">
                                                <h3>Registro Periodo</h3>
                                                <div>
                                                    <h5 >Fecha Apertura:</h5>
                                                    <input style="margin-bottom: 10%; border:3px solid black ;" name="Fecha_Inicio" type="date" placeholder="Fecha Inicio">
                                                </div>
                                                <div>
                                                    <h5>Fecha Final:</h5>
                                                    <input style="margin-bottom: 10%; border: 3px solid black ;" name="Fecha_Fin" type="date" placeholder="Fecha Fin">
                                                </div>
                                                <div>
                                                    
                                                    <button class="btn btn-success" type="submit" style="margin-bottom: 5%; margin-left: 40%;">Agregar</button>
                                                </div>


                                            </div>
                                            
                                        </div>
                                        {{Form::Close()}}
                                    </div>
                                </div>
                                
                            </div>
                        </div>                 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text">
                                                    <th style="text-align: center;">N°</th>
                                                    <th style="text-align: center;">Inicio</th>
                                                    <th style="text-align: center;">Fin</th>
                                                    <th style="text-align: center;">Opciones</th>
                                                </thead>
                                                <tbody>
                                                @foreach ($periodo as $peri)
                                                <tr >
                                                    <td style="float: left;">{{ $peri->idPeriodo_Programa}}</td>
                                                    <td style="text-align: center;">{{ $peri->Fecha_Inicio}}</td>
                                                    <td style="text-align: center;">{{ $peri->Fecha_Fin}}</td>
                                                    <td style="text-align: center;"><a data-target="#modal-periodoedit-{{$peri->idPeriodo_Programa}}" data-toggle="modal"><button class="btn btn-danger" type="submit">Editar</button></a></td>
                                                    @include('periodo.PeriodoEdit')
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        {{$periodo->render()}}   
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
            