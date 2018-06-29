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
.datepicker {
   width: 54px;
   -webkit-transition: all .5s ease;
   -moz-transition: all .5s ease;
   transition: all .5s ease;
}
.datepicker:focus {
   width: 100px;
}
.hide{
    display: none;
}
.resp {
   width: 100px;
   -webkit-transition: all .5s ease;
   -moz-transition: all .5s ease;
   transition: all .5s ease;
}
.resp:focus {
   width: 170px;
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
        <div class="cold-md-6 mr-automl-auto">
    
    </div>

        <div class="col-md-6 mr-auto ml-auto">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card card-wizard" data-color="primary" id="wizardProfile">
                {!!Form::open(array('url'=>'Familia/store','method'=>'POST','autocomplete'=>'off'))!!} 
                {{Form::token()}} {{ csrf_field() }}
          
                        <div class="card-header text-center" data-background-color="orange">
                            <div class="wizard-navigation" id="tabs">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#about" data-toggle="tab">
                                        
                                            Familia
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#account" data-toggle="tab">
                                           
                                            Madre
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#address" data-toggle="tab">
                                            
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
                                                <input type="number" style="border: none;border-bottom: 2px dotted black;" 
                                                name="Fam_numero">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label"><strong>FAMILIA:</strong></label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" style="border: none;border-bottom: 2px dotted black;"
                                                name="Fam_nom">
                                            </div>
                                        </div>
                                    </div>
                                  <h6>Responsable de la Familia</h6>
                                  <div class="row">
                                        <label class="col-md-3 col-form-label">A.P</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" name="Madre_Apelpa" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label">A.M</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" name="Madre_Apelma" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-3 col-form-label">Nombres</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" name="Madre_Nom" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <label class="col-md-3 col-form-label">Dirección</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" style="border: none;border-bottom: 2px dotted black;" name="Fam_direccion">
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
                                                <input type="number" name="Madre_HC" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label">DNI</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="number" name="Madre_DNI" style="border: none;border-bottom: 2px dotted black;">
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
                                                <input class="form-check-input" type="radio" name="Tipo_Familia" id="exampleRadios3" value="Nueva" onclick="show2();">
                                                <span class="form-check-sign"></span>
                                                Nueva
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Tipo_Familia" id="exampleRadios4" value="Continuadora" onclick="show1();">
                                                <span class="form-check-sign"></span>
                                                Continuadora
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Tipo_Familia" id="exampleRadios4" value="Reingresante" onclick="show2();">
                                                <span class="form-check-sign"></span>
                                                Reingresante
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Cap div, hide don't forget -->
                                    <div class="article hide" id="divcap">
                                       <h6>Modo de Captacion</h6>
                                        <div class="col-sm-12 checkbox-radios">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Modo_Capta" id="" value="Visita ">
                                                <span class="form-check-sign"></span>
                                                Visita Hospitalaria
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Modo_Capta" id="" value="Hospital">
                                                <span class="form-check-sign"></span>
                                                Hospital
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Modo_Capta" id="" value="Campana">
                                                <span class="form-check-sign"></span>
                                                Campaña de Salud
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Modo_Capta" id="" value="Otro">
                                                <span class="form-check-sign"></span>
                                                Otros
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End div of cap-->
                                  </div>
                                    <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>ASISTENCIA A SESIONES</strong></label>
                                    </div>
                                    <div class="form-group">
                                  <table class="table-bordered">
                                   <tbody>
                                    <tr>
                                     <td class="text-center">TEMA</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                     <td>Fecha</td>
                                    </tr>
                                    @foreach($sesion as $n)
                                    <tr>
                                     <td class="text-center">{{ $n->Sesiones_Nom }}<input type="hidden" name="idsesion[]" value="{{ $n->idSesiones }}" ></td>
                                     <td><input  name="f1[]" class="form-control datepicker" ></td>
                                     <td><input  name="f2[]" class="form-control datepicker" ></td>
                                     <td><input  name="f3[]" class="form-control datepicker" ></td>
                                     <td><input  name="f4[]" class="form-control datepicker" ></td>
                                     <td><input  name="f5[]" class="form-control datepicker" ></td>
                                    </tr>
                                    @endforeach
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
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Gestante_Inicio" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Gestante_Final" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article">
                                       <label>Final</label>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Gestante_Final" />
                                                 </span>
                                                <br>
                                                <br>
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Gestante_Final" />
                                                 </span>
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
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="exampleRadios3" value="Natural">
                                                <span class="form-check-sign"></span>
                                                Natural
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="exampleRadios4" value="Condon">
                                                <span class="form-check-sign"></span>
                                                Condon
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="exampleRadios4" value="Pildoras">
                                                <span class="form-check-sign"></span>
                                                Pildoras
                                            </label>
                                        </div>
                                           <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="exampleRadios4" value="Inyectables">
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
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="" value="T de Cobre">
                                                <span class="form-check-sign"></span>
                                                T de Cobre
                                            </label>
                                        </div>

                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="" value="Ligadura de Trompa">
                                                <span class="form-check-sign"></span>
                                                Ligadura de Trompa
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="" value="Vasectomia">
                                                <span class="form-check-sign"></span>
                                                Vasectomia
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Planificacion_nom" id="" value="Otros">
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
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="CPN_Antes_pg" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="CPN_Antes_pg" />
                                                 </span>
                                            </span>
                                                <input type="text" class="" name="CPN_cantidad" style="border: none;border-bottom: 2px dotted black;" placeholder="Cantidad">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    <label class="col-md-10 col-form-label"><strong>Durante el Programa</strong></label>
                                        <table class="table-bordered" id="cpntable">
                                           <thead>
                                            <tr>
                                            <th>N° CPN</th>
                                            <th>Fecha</th>
                                            <th>Responsable</th>
                                            <th><a class="" type="btn-success" id="addcpn"><i class="now-ui-icons ui-1_simple-add"></i></a></th>
                                            </tr>
                                           </thead>
                                        <tbody>
                                         <tr>             
                                          <td><input type="number"  name="Cpn_numero[]" class="form-control"></td>
                                          <td><input type="date" name="Cpn_fecha[]" class="form-control"></td>
                                          <td><input type="text"  name="Cpn_responsable[]" class="form-control"></td>
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
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Papanicolau_Antes_pg" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Papanicolau_Antes_pg" />
                                                 </span>
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
                                                <input type="checkbox" hidden="" value="1" name="Papanicolau_resul" />
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                                <input type="checkbox" hidden="" value="0" name="Papanicolau_resul" />
                                            </span>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                   <div class="row">

                                        <label class="col-md-4 col-form-label">Durante el Programa</label>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="date" class="" name="Papanicolau_Durante_Fecha">
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
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Ex_automama" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Ex_automama" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="article">
                                       <label>Sospechoso</label>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                             <span class="btn-group" data-toggle="buttons-radio">
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Ex_automama_sospechoso" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Ex_automama_sospechoso" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                   <div class="row">

                                        <label class="col-md-4 col-form-label">Durante el Programa</label>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="date" class="" name="Ex_automama_Durante_fecha">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 33%;"><strong>VACUNA ANTITENICA</strong></label>
                                    </div>
                                     <div class="article-container">
                        
                                    <div class="article" >
                                       <label>Antes del Programa</label>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                 <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="Vacuna_antite_pg" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" name="Vacuna_antite_pg" />
                                                 </span>
                                            </span>
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="article">
                                       <label>Cantidad</label>

                                        <div class="col-md-">
                                            <div class="form-group">
                                               <input type="text" class="" style="border: none;border-bottom: 2px dotted black;" name="Vacuna_cantidad">
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
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">Historia Clinica</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" style="border: none;border-bottom: 2px dotted black;" name="Nino_hc[]">
                                                </div>
                                            </div>
                                            <label class="col-md-2 col-form-label">DNI</label>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="" style="border: none;border-bottom: 2px dotted black;"
                                                    name="Nino_dni[]">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>
                                 <div class="row">
                                        <label class="col-md-4 col-form-label">Nombres</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="" style="border: none;border-bottom: 2px dotted black;"
                                                name="Nino_nom[]">
                                            </div>
                                        </div>
                                </div>
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">Fecha Nacimiento</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="date" class="" style="border: none;border-bottom: 2px dotted black;" name="Nino_fechan[]">
                                                </div>
                                            </div>
                                            <label class="col-md-2 col-form-label">Sexo</label>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <select name="Nino_sexo[]">
                                                        <option value="M">M</option>
                                                        <option value="F">F</option>
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
                                    @foreach($chequeo as $che)
                                    @if ($che->Tipo_Chequeo_idTipo_Chequeo == 1)
                                    <div class="row">

                                        <label class="col-md-3 col-form-label">{{$che->Chequeo_nom}}</label>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                              <span class="btn-group" data-toggle="buttons-radio">
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">SI</button>
                                                 <input type="checkbox" hidden="" value="1" name="" />
                                                 </span>
                                                <br>
                                                <br>
                                                <span class="button-checkbox">
                                                 <button type="button" class="btn btn-default btn-sm" data-color="primary">NO</button>
                                                 <input type="checkbox" hidden="" value="0" />
                                                 </span>
                                            </span>
                                                <input type="hidden" name="Chequeo_idChequeo[]" value="{{$che->idChequeo}}">
                                                <input type="date" class="" name="Nino_hcfecha[]" style="border: none;border-bottom: 2px dotted black;">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                        
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
                                         <th><input type="text" name="Cn_fecha[]" class="form-control"></th>
                                         <td><input type="number" name="Cn_edad[]" class="form-control"></td>
                                         <td><input type="number" name="Cn_peso[]" class="form-control"></td>
                                         <td><input type="number" name="Cn_talla[]" class="form-control"></td>
                                         <td><input type="number" name="Cn_hb_hto[]" class="form-control"></td>
                                         <td><input type="text" name="Cn_Observacion[]" class="form-control"></td>
                                      </tr>
   
                                   </tbody>
                                   </table>
                                   <div style="border:none;  border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label"><strong>MICRONUTRIENTES (Niños menores 3 años)</strong></label>
                                    </div>
                               
                                    <div class="row">

                                        <div class="col-md-9">
                                              <div class="form-group">
                                                <button type="button" class="btn btn-default btn-sm" data-color="primary"
                                                data-toggle="modal" data-target="#noticeModal">Abrir Micronutrientes</button>
                                            </div>
                                        </div>
                                        @include('Familia.RegistroFamilia')


                                    </div>
                                    <div style="border:none;  border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label"><strong>SULFATO FERROSO</strong></label>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-9">
                                              <div class="form-group">
                                                <button type="button" class="btn btn-default btn-sm" data-color="primary"
                                                data-toggle="modal" data-target="#sulfatoModal">Abrir Sulfato</button>
                                            </div>
                                        </div>
                                     </div>
                                  

                                     <div style="border:none;  border-bottom: 2px solid black; border-top: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>PROBLEMAS DE SALUD</strong></label>
                                    </div>
                                     <table class="table-bordered">
                                       <thead>
                                        <tr>
                                          <th >Enfermedad</th>
                                          <th >Fecha</th>
                                          <th colspan="2">Atendido</th>
                                          <th >HH</th>
                                          <th >Otro</th>

                                       </tr>
                                         <tr>
                                          <th scope="col"></th>
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
                                         <th><input type="text" name="Problema_enfermedad[]" class="form-control"></th>
                                         <td><input type="date" name="Problema_fecha[]" class="form-control "></td>
                                         <td><input type="radio" name="Problema_atendido[]" value="1" id="atendido" class="form-control"></td>
                                         <td><input type="radio" name="Problema_atendido[]" value="0" id="atendido" class="form-control"></td>
                                         <td><input type="radio" name="Problema_hospital[]" value="Huaycan" id="Problema" class="form-control"></td>
                                         <td><input type="radio" name="Problema_hospital[]" value="Otro" id="Problema" class="form-control"></td>
                                      </tr>
   
                                   </tbody>
                                   </table>

                            

                            </div>
                        </div>
                        @include('Familia.RegistroSulfato')
                      

                        <div class="card-footer">
                            <div class="pull-right">

                                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Siguiente' />
                                <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Guardar' />

                                <input type='button' style="float: right;" 
                            class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Siguiente' />
                                <input type='submit' style="float: right;"  class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Guardar' />

                            </div>

                            <div class="pull-left">
                                <input type='button' style="float: left;" class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    {!!Form::close()!!}
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

        var tbody = $('#cpntable').children('tbody');
        var table = tbody.length ? tbody : $('#cpntable');
        $('#addcpn').click(function(){
            table.append('<tr><td><input type="number" class="form-control"></td><td><input type="date" class="form-control"></td><td><input type="text" class="form-control resp"></td></tr>');
        })
    </script>

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
   $('.datepicker').each(function(){
    $(this).datepicker();
   });
   function show1(){
     document.getElementById('divcap').style.display = 'none';
   }

   function show2(){
     document.getElementById('divcap').style.display = 'block';
   }
  </script>
  <script type="text/javascript">
      $(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
  </script>
  
    @endsection