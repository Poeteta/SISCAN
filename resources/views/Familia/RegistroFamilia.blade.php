@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')
<style type="text/css">
    fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
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
      
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Datos Clinicos Madre</h4>
                    </div>
                    <div class="card-body ">
                        <form method="get" action="https://demos.creative-tim.com/" class="form-horizontal">
                             <fieldset class="scheduler-border">
                             <legend class="scheduler-border">Gestación</legend>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">With help</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                             <fieldset class="scheduler-border">
                             <legend class="scheduler-border">Planificación Familiar</legend>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">With help</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <span class="form-text">A block of help text that breaks onto a new line.</span>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                             <fieldset class="scheduler-border">
                             <legend class="scheduler-border">Control Prenatal</legend>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">With help</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <span class="form-text">A block of help text that breaks onto a new line.</span>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                             <fieldset class="scheduler-border">
                             <legend class="scheduler-border">Papanicolau</legend>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">With help</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <span class="form-text">A block of help text that breaks onto a new line.</span>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                             <fieldset class="scheduler-border">
                             <legend class="scheduler-border">Examen y Autoexamen de Mamas</legend>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">With help</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <span class="form-text">A block of help text that breaks onto a new line.</span>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                             <fieldset class="scheduler-border">
                             <legend class="scheduler-border">Vacuna Antitetanica</legend>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">With help</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <span class="form-text">A block of help text that breaks onto a new line.</span>
                                    </div>
                                </div>
                            </div>
                            </fieldset>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection