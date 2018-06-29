<div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Familias</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                   <th>Familias</th>
                                                   <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    <tr>
                             <td>Aprobadas</td>
                             <td>{{$evaluacionapro->idcontevalapro}}</td>
                            </tr>

                            <tr>
                             <td>Desaprobadas</td>
                             <td>{{$evaluaciondesapro->idcontevaldesapro}}</td>
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
                                    <h5 class="card-category">Evaluación</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

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
        width: 500,
        height: 300,
        bar: {groupWidth: "65%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
$('#link8').removeClass('active');

  }

</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="columnchart_values" style="width: 500px; height: 300px;"></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>