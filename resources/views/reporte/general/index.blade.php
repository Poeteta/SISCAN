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

      @include('reporte.general.search')

        <div class="card card-plain card-subcategories">
            <div class="card-body ">
                <!--
                                            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                        -->
                <ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                            <i class="now-ui-icons objects_umbrella-13"></i>
                            Familia
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                            <i class="now-ui-icons shopping_shop"></i>
                            Evaluación
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                            <i class="now-ui-icons shopping_shop"></i>
                            Asistencias
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space tab-subcategories">
                    <div class="tab-pane active" id="link7">

                    @include('reporte.general.familia')

               
                </div>
 <!--  cierre de div - link 7 -->

 <!--  INICIO de div - link 8 -->
                    <div class="tab-pane active" id="link8">

 <div class="content">                  
<div class="row">


  <div class="content table-responsive col-md-4">

    <table class="table table-striped">
                            <thead>
                            <th>Familias</th>
                            <th>Cantidad</th>
                            </thead>

                            <tr>
                             <td>Aprobadas</td>
                             <td>{{$evaluacionapro->idcontevalapro}}</td>
                            </tr>

                            <tr>
                             <td>Desaprobadas</td>
                             <td>{{$evaluaciondesapro->idcontevaldesapro}}</td>
                            </tr>

                     
                        </table>
                        

                    </div>
 

@push('scripts')
<script type="text/javascript">
  
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Familias Aprobadas", {{$evaluacionapro->idcontevalapro}} , "#4285f4"],
        ["Familias Desaprobadas", {{$evaluaciondesapro->idcontevaldesapro}} , "#db4437"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Gráfico de barras",
        width: 600,
        height: 400,
        bar: {groupWidth: "65%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
$('#link8').removeClass('active');

  }

</script>
@endpush
<div id="columnchart_values" style="width: 600px; height: 400px;"></div>
</div>




</div> 

                    </div>
                     <!--  cierre de div - link 8 -->
<!--  INICIO de div - link 9 -->
                    <div class="tab-pane active" id="link9">

 <div class="content">                  
<div class="row">


  <div class="content table-responsive col-md-4">

    <table class="table table-striped">
                            <thead>
                            <th>Familias</th>
                            <th>Cantidad</th>
                            </thead>

                            <tr>
                             <td>Alimentación y nutrición</td>
                             <td>{{$asisalimentacion->idcontSeAli}}</td>
                            </tr>

                            <tr>
                             <td>Salud sexual y reproductiva</td>
                             <td>{{$asissexrepro->idcontSesexpro}}</td>
                            </tr>

                            <tr>
                             <td>Higiene y ambiente</td>
                             <td>{{$asishigiambi->idcontSehigiambi}}</td>
                            </tr>

                            <tr>
                             <td>Habilidades para la vida</td>
                             <td>{{$asishabivida->idcontSehabivida}}</td>
                            </tr>

                            <tr>
                             <td>Seguridad Vial</td>
                             <td>{{$asissegvial->idcontSesegvial}}</td>
                            </tr>

                            <tr>
                             <td>Salud mental</td>
                             <td>{{$asissalmen->idcontSesalmen}}</td>
                            </tr>

                            <tr>
                             <td>TBC</td>
                             <td>{{$asisTBC->idcontSesTBC}}</td>
                            </tr>

                            <tr>
                             <td>Dengue/ Chikungunya</td>
                             <td>{{$asisdengue->idcontSesdengue}}</td>
                            </tr>

                            <tr>
                             <td>Actividad física</td>
                             <td>{{$asisactifisi->idcontSesactifisi}}</td>
                            </tr>

                     
                        </table>
                        

                    </div>
 

@push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data3 = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Alimentación y nutrición", {{$asisalimentacion->idcontSeAli}}, "#b87333"],
        ["Salud sexual y reproductiva", {{$asissexrepro->idcontSesexpro}}, "silver"],
        ["Higiene y ambiente", {{$asishigiambi->idcontSehigiambi}}, "gold"],
        ["Habilidades para la vida", {{$asishabivida->idcontSehabivida}}, "color: #e5e4e2"],
        ["Seguridad Vial", {{$asissegvial->idcontSesegvial}}, "#b87333"],
        ["Salud mental", {{$asissalmen->idcontSesalmen}}, "stroke-color: #703593; stroke-width: 4; fill-color: #C5A5CF"],
        ["TBC", {{$asisTBC->idcontSesTBC}}, "color: gray"],
        ["Dengue/ Chikungunya", {{$asisdengue->idcontSesdengue}}, "#76A7FA"],
        ["Actividad física", {{$asisactifisi->idcontSesactifisi}}, "gold"]
      ]);
      var view3 = new google.visualization.DataView(data3);
      view3.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options3 = {
        title: "Reporte de Asistencias",
        width: 600,
        height: 400,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart3 = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
      chart3.draw(view3, options3);
      $('#link9').removeClass('active');
  }
</script>
@endpush

  <div id="columnchart_values3" style="width: 600px; height: 400px;"></div>
</div>

   
</div>



</div> 

                    </div>

                    <!-- Cierre de link9 -->
                </div>
            </div>
        </div>
    
</div>

<script>
    $("#content").children().click(function (e) {
        e.stopPropagation();
    });
</script>
@endsection