<div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Evaluación</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="tablaevaluacion" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                   <th>Evaluación de las Familias</th>
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
      var datacapta = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Familias Aprobadas", {{$evaluacionapro->idcontevalapro}} , "#4285f4"],
        ["Familias Desaprobadas", {{$evaluaciondesapro->idcontevaldesapro}} , "#db4437"],
      ]);

      var viewcapta = new google.visualization.DataView(datacapta);
      viewcapta.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var optionscapta = {
        title: "Evaluación de las Familias",
        width: 500,
        height: 300,
        bar: {groupWidth: "65%"},
        legend: { position: "none" },
      };
      var charteva = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));


google.visualization.events.addListener(charteva, 'ready', function () {
  var content = '<img src="' + charteva.getImageURI() + '">';
  $('#graph-images3').append(content);
});


      
      charteva.draw(viewcapta, optionscapta);




$('#link8').removeClass('active');

  }

</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="columnchart_values" style="width: 500px; height: 300px;"></div>

                                      <div id="graph-images3" style='display:none'></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>