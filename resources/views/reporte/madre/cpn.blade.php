       
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
                                            <table id="tablacpn" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Etapas de Control Prenatal</th>
                                                        <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                          <?php $number1n = 0; ?>
                          <?php $number2n = 0; ?>
                          <?php $number3n = 0; ?>
                          <?php $number4n = 0; ?>
                          <?php $number5n = 0; ?>
                          <?php $number6n = 0; ?>
                          @foreach($cpn as $cp)

                          @if($cp->user_count == 1)
                          <?php $number1n++ ?>  
                          @elseif($cp->user_count == 2)
                          <?php $number2n++ ?>
                          @elseif($cp->user_count == 3)
                          <?php $number3n++ ?>
                          @elseif($cp->user_count == 4)
                          <?php $number4n++ ?>
                          @elseif($cp->user_count == 5)
                          <?php $number5n++ ?>
                          @elseif($cp->user_count == 6)
                          <?php $number6n++ ?>
                          @endif
 

                          @endforeach                  
                                                        <tr>
                                                        <td>Primera</td>
                                                        <td>{{ $number1n }}</td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Segunda</td>
                                                        <td>{{ $number2n }}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Tercera</td>
                                                        <td>{{ $number3n }}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Cuarta</td>
                                                        <td>{{ $number4n }}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Quinta</td>
                                                        <td>{{ $number5n }}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Sexta</td>
                                                        <td>{{ $number6n }}</td>
                                                        
                                                   
                                                       
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
        ["Etapa 1", {{ $number1n }} , "#b87333"],
        ["Etapa 2",{{ $number2n }}, "#b87333"],
        ["Etapa 3", {{ $number3n }}, "#b87333"],
        ["Etapa 4", {{ $number4n }} , "#b87333"],
        ["Etapa 5", {{ $number5n }} , "#b87333"],
        ["Etapa 6", {{ $number6n }} , "#b87333"]
      ]);
      var view3 = new google.visualization.DataView(data3);
      view3.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options3 = {
        title: "Reporte de Control Prenatal",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart3 = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));

google.visualization.events.addListener(chart3, 'ready', function () {
  var content = '<img src="' + chart3.getImageURI() + '">';
  $('#graph-imagescpn').append(content);
});



      chart3.draw(view3, options3);
       
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="columnchart_values3" style="width: 500px; height: 300px;"></div>
                                      <div id="graph-imagescpn" style='display:none'></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>