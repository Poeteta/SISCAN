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
            <h2 class="title">Lista de Periodos</h2>
        </div>
    </div>
    <div class="content">

        <div class="row">

            <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-calendar">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-2 col-lg-2">
                           
                                <button class="btn btn-success" id="periodomodal" style="margin-bottom: 20%;"><i class=" glyphicon glyphicon-plus"></i> Nuevo</button>
                        </div></div>
                    


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
                                                </thead>
                                                <tbody>
                                                    @foreach ($periodo as $peri)
                                                    <tr >
                                                        <td style="float: left;">{{ $peri->idPeriodo_Programa}}</td>
                                                        <td style="text-align: center;">{{ $peri->Fecha_Inicio}}</td>
                                                        <td style="text-align: center;">{{ $peri->Fecha_Fin}}</td>
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
            