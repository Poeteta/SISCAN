@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<style type="text/css">
  .article-container {
  display: flex;
  flex-wrap: wrap;
}

.article {
  flex: 0 0 50%;
  padding: 10px;
}

* {
  margin: 0;
  box-sizing: border-box;
}
</style>
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
                <a class="navbar-brand" href="#pablo">FAMILIA Registrar</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
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
        <div class="col-md-6 mr-auto ml-auto">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card card-wizard" data-color="primary" id="wizardProfile">
                    <form action="" method="">
                        <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                        <div class="card-header text-center" data-background-color="orange">
                            <h3 class="card-title">
                                Carnet Familiar
                            </h3>
                            <div class="wizard-navigation" id="tabs">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#about" data-toggle="tab">
                                            <i class="now-ui-icons users_circle-08"></i>
                                            Familia
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#account" data-toggle="tab">
                                            <i class="now-ui-icons ui-1_settings-gear-63"></i>
                                            Madre
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#address" data-toggle="tab">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                            Niño
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="card-body" style="border:2px solid black;">
                            <div class="tab-content" >
                                <div class="tab-pane fade show active" id="about" >
                               
                                        <img src="{{ asset('img/Header2.jpg') }}" height="120px" width="450px">
                                  
                                    <div style="border:none; border-bottom:2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-6 col-form-label"><strong>N° FAMILIA BENEFICIARIA</strong></label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label"><strong>FAMILIA:</strong></label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                  <h6>Responsable de la Familia</h6>
                                  <div class="row">
                                        <label class="col-md-3 col-form-label">A.P</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label">A.M</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-3 col-form-label">Nombres</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <label class="col-md-3 col-form-label">Dirección</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                      <div style="border:none; border-top: 2px solid black;" class="row">
                                    </div>

                                    <div>
                                         <div class="row">
                                        <label class="col-md-3 col-form-label">HC</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="number" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label">DNI</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="border:none; border-bottom: 2px solid black;" class="row">
                                    </div>
                                <div class="article-container">
                                    <div class="article" >
                                       <h6>Caracteristicas de la Familia</h6>
                                        <div class="col-sm-10 checkbox-radios">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                                                <span class="form-check-sign"></span>
                                                Nueva
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Continuadora
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Reingresante
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="article">
                                       <h6>Modo de Captacion</h6>
                                        <div class="col-sm-12 checkbox-radios">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio2" id="" value="option1">
                                                <span class="form-check-sign"></span>
                                                Visita Hospitalaria
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio2" id="" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Hospital
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio2" id="" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Campaña de Salud
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio2" id="" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Otros
                                            </label>
                                        </div>
                                    </div>
                                     </div>
                                  </div>
                                    <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>ASISTENCIA A SESIONES</strong></label>
                                    </div>
                                    <div class="form-group">
                                  <table class="table-bordered">
                                   <tbody>
                                    <tr>
                                     <td>TEMA</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                    </tr>
                                    <tr>
                                     <td>Alimentacion y Nutricion</td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                    </tr>
                                  <tr>
                                  <td>Salud Sexual y Reproductiva</td>
                                  <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
     
                                   </tr>
                                  <tr>
                                  <td>Higiene y Ambiente</td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                  </tr>
                                 <tr>
                                 <td>Habilidades para la Vida</td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                  </tr>
                                 <tr>
                                 <td>Seguridad Vial</td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                     <td><input  name="" class="form-control datepicker" id="datepicker"></td>
                                 </tr>
                                </tbody>
                                </table>

                                </div>
                            </div>

                            
                                <div class="tab-pane fade" id="account">
                                    <div style="border:none; border-bottom:2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><h6>DATOS DE LA MADRE</h6>(Mujeres en Edad Fertil)</label>
                                    </div>
                                    <div class="article-container" style="border:none; border-bottom:2px solid black;">
                        
                                    <div class="article" >
                                       <label>Inicio</label>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article">
                                       <label>Final</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                     </div>
                                  </div>

                                    <div class="article-container">
                                    <label class="col-md-10 col-form-label"><strong>PLANIFICACIÓN FAMILIAR</strong></label>

                                    <div class="article" >
                                        <div class="col-sm-10 checkbox-radios">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                                                <span class="form-check-sign"></span>
                                                Natural
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Condon
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Pildoras
                                            </label>
                                        </div>
                                           <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Inyectables
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="article">
                        
                                        <div class="col-sm-12 checkbox-radios">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="pfam" id="" value="option1">
                                                <span class="form-check-sign"></span>
                                                T de Cobre
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="pfam" id="" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Ligadura de Trompa
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="pfam" id="" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Vasectomia
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="pfam" id="" value="option2" checked>
                                                <span class="form-check-sign"></span>
                                                Otros
                                            </label>
                                        </div>
                                    </div>
                                     </div>
                                  </div>
                                  <div style="border:none; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label"><strong>CONTROL PRENATAL</strong></label>
                                    </div>
                                     <div class="row">

                                        <label class="col-md-3 col-form-label">Antes del Programa</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;" placeholder="Cantidad">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    <label class="col-md-10 col-form-label"><strong>Durante el Programa</strong></label>
                                        <table class="table table-bordered">
                                           <thead>
                                            <tr>
                                            <th></th>
                                            <th scope="col" style="font-size: 1;">N° CPN</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Responsable</th>
                                            </tr>
                                           </thead>
                                        <tbody>
                                         <tr>
                                          <td><i class="now-ui-icons ui-1_simple-add"></i></td>
                                          <td><input type="" name="" class="form-control"></td>
                                          <td><input type="" name="" class="form-control"></td>
                                          <td><input type="" name="" class="form-control"></td>
                                         </tr>

                                       </tbody>
                                       </table>
                                    </div>
                                    <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 33%;"><strong>PAPANICOLAU</strong></label>
                                    </div>
                                     <div class="article-container">
                        
                                    <div class="article" >
                                       <label>Antes del Programa</label>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="article">
                                       <label>Obtuvo Resultado</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                   <div class="row">

                                        <label class="col-md-4 col-form-label">Durante el Programa</label>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="date" class="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 20%;"><strong>EXAMEN Y AUTOEXAMEN DE MAMAS</strong></label>
                                    </div>
                                     <div class="article-container">
                        
                                    <div class="article" >
                                       <label>Antes del Programa</label>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="article">
                                       <label>Sospechoso</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                   <div class="row">

                                        <label class="col-md-4 col-form-label">Durante el Programa</label>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="date" class="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 33%;"><strong>VACUNA ANTITENICA</strong></label>
                                    </div>
                                     <div class="article-container">
                        
                                    <div class="article" >
                                       <label>Antes del Programa</label>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="article">
                                       <label>Cantidad</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                   <div class="row">

                                        <label class="col-md-4 col-form-label">Durante el Programa</label>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="date" class="" >
                                            </div>
                                        </div>
                                    </div>

                                </div>
                      


          
                <div class="tab-pane fade" id="address">
                     <button id="add-tab" class="btn btn-success btn-sm" onclick="location.href = '#';"><span class="btn-label" href="#"><i class="now-ui-icons ui-1_simple-add"></i></span></button>
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">Historia Clinica</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" style="border: none;border-bottom: 2px dotted black;">
                                                </div>
                                            </div>
                                            <label class="col-md-2 col-form-label">DNI</label>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>
                                 <div class="row">
                                        <label class="col-md-4 col-form-label">Nombres</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                </div>
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">Fecha Nacimiento</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                                </div>
                                            </div>
                                            <label class="col-md-2 col-form-label">Sexo</label>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <select>
                                                        <option>M</option>
                                                        <option>F</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>


                                     <div style="border:none; border-bottom:2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>VACUNAS (Según Edad)</strong></label>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <label class="col-md-3 col-form-label">Tuberculosis</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">

                                        <label class="col-md-3 col-form-label">Hepatitis B</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">

                                        <label class="col-md-3 col-form-label">Pentavalente</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">

                                        <label class="col-md-3 col-form-label">Polio</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">

                                        <label class="col-md-3 col-form-label">Rotavirus</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">

                                        <label class="col-md-3 col-form-label">Neumococo</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">

                                        <label class="col-md-3 col-form-label">SPR</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">

                                        <label class="col-md-3 col-form-label">DPT</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">

                                        <label class="col-md-3 col-form-label">Amarilica</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="date" class="" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border:none; border-bottom:2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>CONTROL NUTRICIONAL</strong></label>
                                    </div>
                                    <table class="table-bordered">
                                       <thead>
                                         <tr>
                                          <th scope="col" style="font-size: 2;">N° Evaluación</th>
                                          <th scope="col">Edad</th>
                                          <th scope="col">Peso</th>
                                          <th scope="col">Talla</th>
                                          <th scope="col">Hb/Hto</th>
                                          <th scope="col">Observacion</th>
                                       </tr>
                                      </thead>
                                   <tbody>
                                      <tr>
                                         <th><input type="number" name="" class="form-control"></th>
                                         <td><input type="number" name="" class="form-control"></td>
                                         <td><input type="number" name="" class="form-control"></td>
                                         <td><input type="number" name="" class="form-control"></td>
                                         <td><input type="number" name="" class="form-control"></td>
                                         <td><input type="text" name="" class="form-control"></td>
                                      </tr>
   
                                   </tbody>
                                   </table>
                                   <div style="border:none;  border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label"><strong>MICRONUTRIENTES (Niños menores 3 años)</strong></label>
                                    </div>
                                    <div class="row">

                                        <label class="col-md-3 col-form-label">¿Recibe Micronutrientes?</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <label class="col-md-3 col-form-label">Abandono</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;" placeholder="Motivo">
                                            </div>
                                        </div>
                                    </div>
                                     <div style="border:none;  border-bottom: 2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>PROBLEMAS DE SALUD</strong></label>
                                    </div>
                                     <table class="table-bordered">
                                       <thead>
                                        <tr>
                                          <th scope="col" style="font-size: 2;">Enfermedad</th>
                                          <th scope="col">Fecha</th>
                                          <th colspan="2">Atendido</th>
                                          <th scope="col">Hospital Huaycan</th>
                                          <th scope="col">Otro</th>

                                       </tr>
                                         <tr>
                                          <th scope="col" style="font-size: 2;"></th>
                                          <th scope="col"></th>
                                          <th scope="col">SI</th>
                                          <th scope="col">NO</th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                       </tr>
                                      </thead>
                                   <tbody>
                                      <tr>
                                         <th><input type="" name="" class="form-control"></th>
                                         <td><input type="date" name="" class="form-control "></td>
                                         <td><input type="radio" name="" class="form-control"></td>
                                         <td><input type="radio" name="" class="form-control"></td>
                                         <td><input type="radio" name="" class="form-control"></td>
                                         <td><input type="radio" name="" class="form-control"></td>
                                      </tr>
   
                                   </tbody>
                                   </table>

                            

                            </div>
                        </div>
                      

                        <div class="card-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Siguiente' />
                                <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Guardar' />
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- wizard container -->
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Initialise the wizard
            demo.initNowUiWizard();
            setTimeout(function () {
                $('.card.card-wizard').addClass('active');
            }, 600);  
        });
    </script>

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $('.datepicker').each(function(){
    $(this).datepicker();
});
  </script>
    @endsection