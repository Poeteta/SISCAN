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
                <a class="navbar-brand" href="#pablo">Evaluac</a>
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
            <h2 class="title">Evaluación</h2>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                         <select name="" class="form-control col-md-2" id="">
                                            <option value="1"><h4 class="card-title">Lista de Familias Evaluadas</h4></option>
                                            <option value="2"><h4 class="card-title">Lista de Familias Sin Evaluar</h4></option>
                            </select>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Familia</th>
                                    <th>Madre</th>
                                    <th>Direccion</th>
                                    <th>Estado</th>
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Familia</th>
                                    <th>Madre</th>
                                    <th>Direccion</th>
                                    <th>Estado</th>
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($famres as $eva)
                                <tr>
                                    <td>{{ $eva->Nom_fam}}</td>
                                    <td>{{ $eva->Madre_nombre}}</td>
                                    <td>{{ $eva->Madre_direccion}}</td>
                                    <?php if ($eva->Estado_Eval == '1'): ?>
                                    <td><button type="button" class="btn btn-info">Saludable</button></td>
                                    <?php else: ?>
                                    <td><button type="button" class="btn btn-danger">No saludable</button></td>
                                    <?php endif ?>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="fa fa-calendar"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Buscar",
        }

    });


    var table = $('#datatable').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
        alert('You clicked on Like button');
    });
});
</script>
@endsection