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
                        <a class="navbar-brand" href="#pablo">Evaluación</a>
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
            <div class="panel-header panel-header-sm">
</div>
            <div class="content">

<div class="row">
<div class="col-md-6">
  <div class="card" style="border: 2px solid black;">
      <div class="card-header">
          <h5 class="title">Evaluacion Final de la Familia</h5>
           <div class="" id="account">
                <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                       
                                    </div>
                                    <div class="row">

                                        <label class="col-md-6 col-form-label">Fecha de Evaluación</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="date" class="" >
                                            </div>
                                        </div>
                                    </div>

                                      <div style="border:none; border-top: 2px solid black; border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>CRITERIOS DE EVALUACION</strong></label>
                                      </div>

                                       <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">1. ASISTENCIA A SESIONES</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">2. NIÑOS CON VACUNAS COMPLETAS SEGÚN EDAD</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">3. NIÑO SIN DESNUTRICION Y ANEMIA NI ANEMIA EN LOS ULTIMOS 3 MESES</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">4. CONTROL PRENATAL</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">5. LA GESTANTE Y SU FAMILIA RECONOCEN LOS SIGNOS DE ALARMA DEL EMBARAZO</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">6. PLANIFICACIÓN FAMILIAR</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">7. FAMILIA CON PLAN FAMILIAR</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">8. FAMILIA QUE PARTICIPA EN ACTIVIDADES COMUNALES</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">9. FAMILIA CON NORMAS DE CONVIVENCIA PARA VIVIR EN ARMONIA</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">10. FAMILIA QUE PRACTICA VALORES</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">11. FAMILIA CON PRACTICAS SALUDABLES QUE PROTEGEN SU SALUD</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">12. ACUDE AL HOSPITAL DE HUAYCAN</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">13. VIVIENDA VENTILADA, LIMPIA Y ORDENADA</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">14. HUERTO IMPLEMENTADO- ARBOL PLANTADO</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row" style="border: none; border-bottom: 2px solid black;">

                                        <label class="col-md-6 col-form-label">15. DEPOSITOS DE AGUA ADECUADAMENTE LAVADOS Y TAPADOS</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="btn-group" data-toggle="buttons-radio">
                                                <button class="btn btn-default btn-sm active">SI</button>
                                                <br>
                                                <br>
                                                <button class="btn btn-default btn-sm">NO</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                            
                                  
                                   
                                
                                    <div style="border:none;  border-bottom: 2px solid black;" class="row">
                                        <label class="col-md-10 col-form-label" style="left: 30%;"><strong>CONDICION DE LA FAMILIA</strong></label>
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
      </div>
  
  </div>
</div>
<div class="col-md-6">
  <div class="card card-user">
      <div class="card-header">
            <h5 class="title">Lista de Familias</h5>
      </div>
      @include('evaluacion.search')

                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>Persona</th>
                            
                                                </thead>
                                                <tbody>
                                                    @foreach($familia as $fam)
                                                    <tr>
                                                        <td>{{ $fam->Fam_nom}}</td>
                                                        
                                                        <td>
                                                            <!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
                                                            <a href="{{URL::action('UsuarioController@show',$fam->idFamilia)}}">
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