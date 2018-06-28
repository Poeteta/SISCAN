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
                <a class="navbar-brand" href="#pablo">Reporte General</a>
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
                            <a class="dropdown-item" href="#">Accion</a>
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
        <div class="card card-plain card-subcategories">
            <div class="card-body ">
                <!--
                                            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                        -->
                <ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                            <i class="now-ui-icons objects_umbrella-13"></i>
                            Tipo de Familia
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                            <i class="now-ui-icons shopping_shop"></i>
                            Modo Captación v2
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space tab-subcategories">
                    <div class="tab-pane active" id="link7">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed
                        base benefits.
                        <br>
                        <br> Dramatically visualize customer directed convergence without revolutionary ROIsss.
                    </div>


                        <!--   AQUI SE DIVIDE -->


                    <div class="tab-pane" id="link8">
                        Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time
                        schemas.
                        <br>
                        <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script>
    $("#content").children().click(function (e) {
        e.stopPropagation();
    });
</script> @endsection