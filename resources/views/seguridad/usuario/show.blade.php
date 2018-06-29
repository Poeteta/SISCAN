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
                
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>DNI</label>
                                        <input type="text" class="form-control" placeholder="Username" value="{{$usuarioshow->Usuario_dni}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        <input type="number" class="form-control" placeholder="" value="{{$usuarioshow->Usuario_telf}}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nombre (s)</label>
                                        <input type="text" class="form-control" placeholder="Company" value="{{$usuarioshow->Usuario_nombre}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Apellido (s)</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="{{$usuarioshow->Usuario_apelpa.' '.$usuarioshow->Usuario_Apelma}}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" value="{{$usuarioshow->Usuario_fechan}}" disabled="">
                                    </div>
                                </div>

                              
                            </div>



                              
                                  <div class="button-container">
                        <div class="text-center">
                            <a data-target="#modal-editPersona-{{$usuarioshow->idUsuario}}" data-toggle="modal">
                                <button class="btn btn-info">Editar usuario {{$usuarioshow->Nom_user}} </button>
                            </a>
                        </div>
                    </div>
      
                    @include('seguridad.usuario.editPersona')

         
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
                                <?php if ($usuarioshow->Estado_user == '1'): ?>
                                <h5 class="title">Activo</h5>
                                <?php else: ?>
                                <h5 class="title">Inactivo</h5>
                                <?php endif ?>
                            </a>
                        </div>
                        <p class="description">
                            Usuario: {{$usuarioshow->Nom_user}}
                        </p>
                        <p class="description">
                            Rol: {{$usuarioshow->Rol_nom}}
                        </p>
                    </div>
                    <hr>
                    <div class="button-container">
                        <div class="text-center">
                            <a data-target="#modal-editUsuario-{{$usuarioshow->idUsuario}}" data-toggle="modal">
                                <button class="btn btn-info">Editar usuario {{$usuarioshow->Nom_user}} </button>
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