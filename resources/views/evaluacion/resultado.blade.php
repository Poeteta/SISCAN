@extends('layouts.app') @section('htmlheader_title') Carnet-Familiar @endsection @section('main-content')
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
                <a class="navbar-brand" href="">
                    <div class="font-icon-detail">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </div>
                </a>
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
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="header text-center">
            <h2 class="title">{{$family->Nom_fam}}</h2>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card card-plain card-subcategories">
                    <div class="card-header ">
                    </div>
                    <div class="card-body ">
                        <!--
                                    color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                -->
                        <ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                                            <i class="now-ui-icons objects_umbrella-13"></i>
                                            General
                                        </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                                            <i class="now-ui-icons shopping_shop"></i>
                                            Madre
                                        </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                            Niños
                                        </a>
                            </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories">
                            <div class="tab-pane active" id="link7">
                                <dl class="dl-horizontal">
                                    <div class="typography-line text-center">
                                        <h6> Responsable</h6>
                                        <dd class="text-center">{{ $family->Respons_fam}}</dd>
                                    </div>
                                    <div class="typography-line text-center">
                                        <h6> TIPO DE FAMILIA</h6> @if($family->Tipo_Familia_idTipo_Familia==1)
                                        <dd class="text-center">Nueva</dd>
                                        @endif @if($family->Tipo_Familia_idTipo_Familia==2)
                                        <dd class="text-center">Reingresante</dd>
                                        @endif @if($family->Tipo_Familia_idTipo_Familia==3)
                                        <dd class="text-center">Continuadora</dd>
                                        @endif
                                    </div>
                                    <div class="typography-line text-center">
                                        <h6> MODO DE CAPTACIÓN</h6> @if($family->Modo_Captacion_idModo_Captacion==1)
                                        <dd class="text-center">Visita Domiciliaria</dd>
                                        @endif @if($family->Modo_Captacion_idModo_Captacion==2)
                                        <dd class="text-center">Hospital</dd>
                                        @endif @if($family->Modo_Captacion_idModo_Captacion==3)
                                        <dd class="text-center">Campaña de Salud</dd>
                                        @endif @if($family->Modo_Captacion_idModo_Captacion==4)
                                        <dd class="text-center">Otros</dd>
                                        @endif
                                    </div>
                                </dl>
                            </div>
                            <div class="tab-pane" id="link8">
                                <dl class="dl-horizontal">
                                    <div class="typography-line text-center">
                                        <h6> Apellidos y Nombre (s)</h6>
                                        <dd class="text-center">{{$family->Madre_apel_pa}}, {{$family->Madre_nombre}}</dd>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                                        <div class="card card-plain">
                                                            <div class="card-header" role="tab" id="headingOne">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><h6>Control Prenatal</h6>
                      <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="card-body">
                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-plain">
                                                            <div class="card-header" role="tab" id="headingThree">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThreea" aria-expanded="false" aria-controls="collapseThree"><h6>Examenes</h6>

                      <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                                                            </div>
                                                            <div id="collapseThreea" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="card-body">
                                                           
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </dl>
                            </div>
                            <div class="tab-pane" id="link9">
                                <div class="row">
                                    @foreach($ninos as $ni) @if($family->idMadre == $ni->Madre_idMadre)
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="typography-line text-center">
                                                    <h6> Apellidos y Nombre (s)</h6>
                                                    <dd class="text-center">{{ $ni->Nino_nombre}}</dd>
                                                    <h6>Historial Clinico:</h6>
                                        <dd>{{ $ni->Nino_HC}}</dd>
                                        <h6>DNI:</h6>
                                        <dd>{{ $ni->Nino_DNI}}</dd>

                                                </div>
                                                <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                                    <div class="card card-plain">
                                                        <div class="card-header" role="tab" id="headingOne">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOnea" aria-expanded="true" aria-controls="collapseOne"><h6>VACUNAS </h6><i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                                                        </div>
                                                        <div id="collapseOnea" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="card-body">
                                                                <div class="container">
                                                                    <table class="table-responsive">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Enfermedad</th>
                                                                                <th>Estado</th>
                                                                                <th>Fecha</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>John</td>
                                                                                <td>Doe</td>
                                                                                <td>john</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-plain">
                                                        <div class="card-header" role="tab" id="headingTwo">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><h6>CONTROL NUTRICIONAL</h6>
                      <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="card-body">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-plain">
                                                        <div class="card-header" role="tab" id="headingThree">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><h6>PROBLEMAS DE SALUD</h6>
                      <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="card-body">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection