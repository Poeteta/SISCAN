@extends ('layouts.app') @section('main-content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
               
                <a class="navbar-brand" href="#pablo">Mi Perfil</a>
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
                                <div class="col-md-3" style="margin-left: 5%;">
                                    <div class="form-group">
                                        <label style="margin-left: 6%; margin-bottom: 10%;">DNI:</label>
                                        <input style="text-align: center;" type="text" class="form-control" placeholder="Username" value="{{$usuarioshow->Usuario_dni}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-3 pl-1" style="margin-left: 5%;">
                                    <div class="form-group">
                                        <label style="margin-left: 6%; margin-bottom: 10%;" for="exampleInputEmail1">Telefono:</label>
                                        <input style="text-align: center;" type="number" class="form-control" placeholder="" value="{{$usuarioshow->Usuario_telf}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-left: 5%;">
                                    <div class="form-group">
                                        <label style="margin-left: 6%; margin-bottom: 10%;">Fecha de Nacimiento:</label>
                                        <input style="text-align: center;" type="text" class="form-control" value="{{$usuarioshow->Usuario_fechan}}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5%; margin-bottom: 5%;">
                                <div class="col-md-5 pr-1" style="margin-left: 5%;">
                                    <div class="form-group">
                                        <label style="margin-left: 3%; margin-bottom: 10%;">Nombre (s):</label>
                                        <input style="text-align: center;" type="text" class="form-control" placeholder="Company" value="{{$usuarioshow->Usuario_nombre}}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-5 pl-1" style="margin-left: 10%;">
                                    <div class="form-group">
                                        <label style="margin-left: 6%; margin-bottom: 10%;">Apellido (s)</label>
                                        <input style="text-align: center;" type="text" class="form-control" placeholder="Last Name" value="{{$usuarioshow->Usuario_apelpa.' '.$usuarioshow->Usuario_Apelma}}" disabled="">
                                    </div>
                                </div>
                            </div>



                              
                                  <div class="button-container">
                    </div>
      
                    @include('perfil.editPersona')
         
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
                            <a data-target="#modal-editPass" data-toggle="modal">
                                <button class="btn btn-info">Editar usuario {{$usuarioshow->Nom_user}} </button>
                            </a>
                        </div>
                    </div>
                 @include('perfil.editPass')
                </div>
            </div>
        </div>
    </div>

</div>
@endsection