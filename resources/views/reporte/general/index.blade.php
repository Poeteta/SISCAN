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
                            Familia
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                            <i class="now-ui-icons shopping_shop"></i>
                            Evaluación
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space tab-subcategories">
                    <div class="tab-pane active" id="link7">


<div class="content">
<div class="row" >
    
        <!-- INICIO SELECT   -->
        
<div class="form-group">
  <div class="col-lg-12">
    <label for="selectperiodotipo" >Seleccionar periodo de programa</label>
    <select class="form-control"  id="selectperiodotipo">
      <option>Seleccionar periodo</option>
      @foreach($periodo_programa as $pepro)
      <option id="{{$pepro->idPeriodo_Programa}}">{{$pepro->Fecha_Inicio}}</option>
      @endforeach
    </select>
  </div> </div>

                        <!-- FIN SELECT  -->
  </div>

  

<div class="row">
  
<div class="content table-responsive col-md-4">

    <table class="table table-striped">
                            <thead>
                            <th>Tipo de Familia</th>
                            <th>Cantidad</th>
                          
                            </thead>


                            <tr>
                             <td>Nueva</td>
                             <td>{{$tipo_nueva->idtipnueva}}</td>
                             </tr>

                            <tr>
                             <td>Continuadora</td>
                             <td>{{$tipo_continuadora->idtipcon}}</td>
                            </tr>

                            <tr>
                            <td>Reingresante</td>
                             <td>{{$tipo_reingresante->idtipreing}}</td>
                            </tr>

                        </table>
                        

                    </div>

    @push('scripts')
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Reporte', 'Medio año'],
          ['Nueva',     {{$tipo_nueva->idtipnueva}}],
          ['Continuadora',     {{$tipo_continuadora->idtipcon}}],
          ['Reingresante',  {{$tipo_reingresante->idtipreing}}]
        ]);

        var options = {
          title: 'Tipo de Familia',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    @endpush

    <div class="col-lg-8 col-md-8">
    <div id="donutchart" style="width: 600px; height: 400px;"></div>
    </div>
    

</div>
                  </div>

<div class="row">
<div class="col-lg-12 col-md-12" style="background: rgba(0,0,0,0.5); width: 10px;height: 10px;">
</div>  
</div>

<div class="content">
       <div class="row">
         <div class="content table-responsive col-md-4 col-lg-4">

    <table class="table table-striped">
                            <thead>
                            <th>Modo Captación</th>
                            <th>Cantidad</th>
                            </thead>

                            <tr>
                             <td>Hospital</td>
                             <td>{{$modo_hospital->idfamhos}}</td>
                            </tr>

                            <tr>
                             <td>Campaña de salud</td>
                             <td>{{$modo_campana->idfamcam}}</td>
                            </tr>

                            <tr>
                            <td>Visita Domiciliaria</td>
                             <td>{{$modo_visita->idfamvisita}}</td>
                            </tr>

                            <tr>
                             <td>Otros</td>
                             <td>{{$modo_otros->idfamotros}}</td>
                            </tr>
                        </table>
                        

                    </div>
  @push('scripts')
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Reporte', 'medio año'],
          ['Hospital', {{$modo_hospital->idfamhos}}],
          ['Campaña de salud',  {{$modo_campana->idfamcam}}],
          ['Visita Domiciliaria', {{$modo_visita->idfamvisita}}],
          ['Otros', {{$modo_otros->idfamotros}}]

        ]);

        var options = {
          title: 'Modo Captación'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
     @endpush

   
    <div id="piechart" class="col-lg-8 col-md-8" style="width: 600px; height: 400px;"></div>

       </div>       </div>      
               
                </div>
 <!--  cierre de div - link 7 -->

 <!--  INICIO de div - link 8 -->
                    <div class="tab-pane" id="link8">

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
                             <td>{{$modo_hospital->idfamhos}}</td>
                            </tr>

                            <tr>
                             <td>Desaprobadas</td>
                             <td>{{$modo_campana->idfamcam}}</td>
                            </tr>

                            <tr>
                            <td>Faltantes</td>
                             <td>{{$modo_visita->idfamvisita}}</td>
                            </tr>

                            <tr>
                             <td>Otros</td>
                             <td>{{$modo_otros->idfamotros}}</td>
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
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
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
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }

</script>
@endpush
<div id="columnchart_values" style="width: 600px; height: 400px;"></div>
</div>




</div> 

                    </div>
                     <!--  cierre de div - link 8 -->

                </div>
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