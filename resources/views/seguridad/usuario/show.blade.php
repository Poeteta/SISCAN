@extends ('layouts.app') @section('main-content')
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
                <a class="navbar-brand" href="#pablo">User Profile</a>
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
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Editar Perfil</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Hospital (disabled)</label>
                                        <input type="HIDE" class="form-control" disabled="" placeholder="Company" value="Huaycan">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>DNI</label>
                                        <input type="text" class="form-control" placeholder="Username" value="{{$trabajadores->DNI}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        <input type="number" class="form-control" placeholder="" value="{{$trabajadores->Telefono}}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nombre (s)</label>
                                        <input type="text" class="form-control" placeholder="Company" value="{{$trabajadores->Nom_per}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Apellido (s)</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="{{$trabajadores->Apel_pater}} {{$trabajadores->Apel_mat}}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" placeholder="Home Address" value="{{$trabajadores->Direccion}}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Distrito</label>
                                        <input type="text" class="form-control" placeholder="City" value="{{$trabajadores->Nom_Dist}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Sexo</label>
                                        <input type="text" class="form-control" placeholder="Country" value="{{$trabajadores->Sexo}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" value="{{$trabajadores->Fecha_nac}}" disabled="">
                                    </div>
                                </div>
                                <div class="form-control">
                                    <a data-target="#modal-editPersona-{{$trabajadores->idPersona}}" data-toggle="modal">
                                        <button class="btn btn-info">Editar datos de {{$trabajadores->Nom_per}} </button>
                                    </a>
                                </div>
                                @include('seguridad.usuario.editPersona')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <?php if ($trabajadores->Estado_user == '1'): ?>
                                <h5 class="title">Activo</h5>
                                <?php else: ?>
                                <h5 class="title">Inactivo</h5>
                                <?php endif ?>
                            </a>
                        </div>
                        <p class="description">
                            Usuario: {{$trabajadores->Nom_user}}
                        </p>
                        <p class="description">
                            Rol: {{$trabajadores->Nom_rol}}
                        </p>
                    </div>
                    <hr>
                    <div class="button-container">
                        <div class="text-center">
                            <a data-target="#modal-editUsuario-{{$trabajadores->idUsuario}}" data-toggle="modal">
                                <button class="btn btn-info">Editar usuario {{$trabajadores->Nom_user}} </button>
                            </a>
                        </div>
                    </div>
                     @include('seguridad.usuario.editUsuario')
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav>
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                document.write(new Date().getFullYear())
                </script>, Designed by
                <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div>
        </div>
    </footer>
</div>
@endsection