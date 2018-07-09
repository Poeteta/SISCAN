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
                                            <table id="tablaexamenmamas" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Examen de Mamas</th>
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
        
         google.visualization.events.addListener(chart, 'ready', function () {
  var content = '<img src="' + chart.getImageURI() + '">';
  $('#graph-imagesexamama').append(content);
});

        chart.draw(data, options);
       
       
      }
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="piechart" style="width: 500px; height: 300px;"></div>
                                      <div id="graph-imagesexamama" style='display:none'></div>
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
                                            <h5 class="title">Vacunas Antitetánico</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="tablaexamenvacuna" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Vacunas Antitetánico</th>
                                                        <th>Cantidad</th>

                                                        
                                                    </tr>
                                                </thead>
                       
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>Vacunas antes del programa</td>
                                                        <td>{{$vacunaantest->idvacunaantest}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vacunas durante el programa</td>
                                                        <td>{{$vacunadurante->idvacunadurnt}}</td>
                                                        
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
                                    <h5 class="card-category">Vacunas Antitetanico</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
     google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data4 = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Vacunas antes del programa", {{$vacunaantest->idvacunaantest}}, "#4285f4"],
        ["Vacunas durante el programa", {{$vacunadurante->idvacunadurnt}}, "#db4437"]
      ]);
      var view4 = new google.visualization.DataView(data4);
      view4.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options4 = {
        title: "Reporte de Asistencias",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart4 = new google.visualization.ColumnChart(document.getElementById("columnchart_values4"));

      google.visualization.events.addListener(chart4, 'ready', function () {
  var content = '<img src="' + chart4.getImageURI() + '">';
  $('#graph-imagesexaantite').append(content);
});
      chart4.draw(view4, options4);
      $('#linkexamama').removeClass('active'); 
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="columnchart_values4" style="width: 500px; height: 300px;"></div>
                                       <div id="graph-imagesexaantite" style='display:none'></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>
