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
    <div class="panel-header">
        <div class="header text-center">
            <h2 class="title">Herramientas</h2>
        </div>
    </div>
    
    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-pricing ">
                    <h6 class="card-category">Importar</h6>
                    
                    <div class="card-body">
                        <div class="card-icon icon-primary ">
                            <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
                        </div>
                        <h3 class="card-title">Desde Excel</h3>
                        <ul>
                                <li>Working materials in EPS</li>
                            </ul>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-round btn-primary" data-toggle="modal" data-target="#noticeModal">
                                  Importar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-pricing ">
                    <h6 class="card-category">Copia de Seguridad</h6>
                    <div class="card-body">
                        <div class="card-icon icon-primary ">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                        </div>
                        <h3 class="card-title">Backup</h3>
                        <ul>
                            <li>Working materials in EPS</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#pablo" class="btn btn-round btn-primary">Iniciar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    	  <div class="modal-dialog modal-notice">
                    	    <div class="modal-content">
                    	      <div class="modal-header">
                    	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    				<i class="now-ui-icons ui-1_simple-remove"></i>
                    			</button>
                    	        <h5 class="modal-title" id="myModalLabel"><strong>Importar Datos</strong></h5>
                    	      </div>
                    	      <div class="modal-body">
                    	        <p>Cargue cualquier Excel a continuación para comenzar a importar los datos de periodos anteriores</p>
                                <div class="col-sm-12">
                                        <!-- Uploader -->
                                        <div id="drag-and-drop-zone" class="dm-uploader p-5">
                                          <h3 class="mb-5 mt-5 text-muted">Deslice o suelte su archivo aqui</h3>
                                              <span>Elegir Archivo desde la Computadora</span>
                                              <input type="file" title='Click to add Files' />
                                        </div>
                                      </div>  
                            </div>
                    	      <div class="modal-footer justify-content-center">
                    	            <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Continuar</button>
                    	      </div>
                    	    </div>
                    	  </div>
                    	</div>
<style>
[class*="col-"] {
	padding-top: 1rem;
	padding-bottom: 1rem;
}
hr {
	margin-top: 2rem;
	margin-bottom: 2rem;
}
#files {
    overflow-y: scroll !important;
    min-height: 320px;
}
@media (min-width: 768px) {
	#files {
		min-height: 0;
	}
}
#debug {
	overflow-y: scroll !important;
	height: 180px;	
}

.dm-uploader {
	border: 0.25rem dashed #A5A5C7;
	text-align: center;
}
.dm-uploader.active {
	border-color: red;

	border-style: solid;
}
</style>
   
    > @endsection