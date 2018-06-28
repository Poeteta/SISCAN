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
                <a class="navbar-brand" href="#pablo">Reporte Madre</a>
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
                            Control Prenatal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                            <i class="now-ui-icons shopping_shop"></i>
                            Sulfato Ferroso
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#linkexamama" role="tablist">
                            <i class="now-ui-icons shopping_shop"></i>
                            Examen de Mamas y Vacunas Antitetanico
                        </a>
                    </li>
  
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                            <i class="now-ui-icons shopping_shop"></i>
                            Vacunas Papanicolau
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space tab-subcategories">
                    <div class="tab-pane active" id="link7">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Control Prenatal</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Etapa</th>
                                                        <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Etapa</th>
                                                        <th>Cantidad</th>
                                                   
                                                        
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>Primera</td>
                                                        <td>Director</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Segunda</td>
                                                        <td>Director</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Tercera</td>
                                                        <td>Support Engineer</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Cuarta</td>
                                                        <td>Support Engineer</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Quinta</td>
                                                        <td>Support Engineer</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Sexta</td>
                                                        <td>Support Engineer</td>
                                                        
                                                   
                                                       
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 mr-auto">
                                <div class="card card-chart">
                                  <div class="card-header">
                                    <h5 class="card-category">Control Prenatal</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data3 = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Etapa 1", 22, "#b87333"],
        ["Etapa 2", 12, "#b87333"],
        ["Etapa 3", 22, "#b87333"],
        ["Etapa 4", 12, "#b87333"],
        ["Etapa 5", 22, "#b87333"],
        ["Etapa 6", 12, "#b87333"]
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
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart3 = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
      chart3.draw(view3, options3);
       
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="columnchart_values3" style="width: 500px; height: 300px;"></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>
                    </div>



                    <div class="tab-pane" id="link8">
                       aasassasas
                    </div>
                    <div class="tab-pane active" id="linkexamama">
                      <div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Examen de Mamas</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Madres</th>
                                                        <th>Cantidad</th>

                                                        
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Total</th>
                                                        <th>{{$examamasi->idexamama + $examamafecha->idexamama + $examamano->idexamama}}</th>
                                                   
                                                        
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>Inicio</td>
                                                        <td>{{$examamasi->idexamama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Durante el proceso</td>
                                                        <td>{{$examamafecha->idexamama}}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Sospechoso</td>
                                                        <td>{{$examamano->idexamama}}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                              
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 mr-auto">
                                <div class="card card-chart">
                                  <div class="card-header">
                                    <h5 class="card-category">Examen de Mamas</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
     
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['', ''],
          ['Inicio',  {{$examamasi->idexamama}}],
          ['Durante el proceso', {{$examamafecha->idexamama}}],
          ['Sospechoso',  {{$examamano->idexamama}}]
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        
        chart.draw(data, options);
        
       
      }
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="piechart" style="width: 500px; height: 300px;"></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div> 
<!-- FIN DE EXAMEN DE MAMAS-->
  
<div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Examen de Mamas</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Madres</th>
                                                        <th>Cantidad</th>

                                                        
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Total</th>
                                                        <th>{{$examamasi->idexamama + $examamafecha->idexamama + $examamano->idexamama}}</th>
                                                   
                                                        
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>Inicio</td>
                                                        <td>{{$examamasi->idexamama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Durante el proceso</td>
                                                        <td>{{$examamafecha->idexamama}}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Sospechoso</td>
                                                        <td>{{$examamano->idexamama}}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                              
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 mr-auto">
                                <div class="card card-chart">
                                  <div class="card-header">
                                    <h5 class="card-category">Examen de Mamas</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 500,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
        
      };
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="barchart_material" style="width: 500px; height: 300px;"></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="link10">
                        Leave The ground
                        <br>
                        <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection