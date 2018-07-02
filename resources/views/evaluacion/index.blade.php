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
<div class="col-md-12">
  <div class="card card-user">
   <div class="wrapper">
    <div class="main">
      <div class="section section-white section-search">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-12 ml-auto mr-auto text-center">
              @include('evaluacion.search')
              <ul class="list-unstyled follows">
                @foreach($familia as $fam)
                <li>
                  <div class="row">
                    <div class="col-md-2 col-3">
                      <img src="data:image/png;base64,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" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                    <div class="col-md-6 description">
                      <h5>{{ $fam->Fam_nom}}<br><small>{{ $fam->Fam_direccion}}<br></small></h5>
                    </div>
                    <div class="col-md-2 col-2">
                      <a href="{{URL::action('evalController@show',$fam->idFamilia)}}"><button class="btn btn-just-icon btn-round btn-outline-danger btn-tooltip" rel="tooltip" title="Evaluar"><i class="fa fa-plus"></i></button></a>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                                        
     
  </div>
</div>
</div>

            </div>         
    </div>
    
  </div>
            @endsection