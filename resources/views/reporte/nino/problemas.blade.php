       
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Problemas de Salud</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="tablaproblemasnino" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Niveles de Problemas de Salud</th>
                                                        <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                          <?php $number1nproblemas = 0; ?>
                          <?php $number2nproblemas = 0; ?>
                          <?php $number3nproblemas = 0; ?>
                          <?php $number4nproblemas = 0; ?>
                          <?php $number5nproblemas = 0; ?>
                          <?php $number6nproblemas = 0; ?>
                          @foreach($problemas_salud as $cp)

                          @if($cp->user_count == 1)
                          <?php $number1nproblemas++ ?>  
                          @elseif($cp->user_count == 2)
                          <?php $number2nproblemas++ ?>
                          @elseif($cp->user_count == 3)
                          <?php $number3nproblemas++ ?>
                          @elseif($cp->user_count == 4)
                          <?php $number4nproblemas++ ?>
                          @elseif($cp->user_count == 5)
                          <?php $number5nproblemas++ ?>
                          @elseif($cp->user_count == 6)
                          <?php $number6nproblemas++ ?>
                          @endif
 

                          @endforeach                  
                                                        <tr>
                                                        <td>Primera vez</td>
                                                        <td>{{ $number1nproblemas }}</td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Segunda vez</td>
                                                        <td>{{ $number2nproblemas }}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Tercera vez</td>
                                                        <td>{{ $number3nproblemas }}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Cuarta vez</td>
                                                        <td>{{ $number4nproblemas }}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Quinta vez</td>
                                                        <td>{{ $number5nproblemas }}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Sexta vez</td>
                                                        <td>{{ $number6nproblemas }}</td>
                                                        
                                                   
                                                       
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
                                    <h5 class="card-category">Problemas de Salud</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var dataproblemas = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Primera vez", {{ $number1nproblemas }} , "#b87333"],
        ["Segunda vez",{{ $number2nproblemas }}, "#b87333"],
        ["Tercera vez", {{ $number3nproblemas }}, "#b87333"],
        ["Cuarta vez", {{ $number4nproblemas }} , "#b87333"],
        ["Quinta vez ", {{ $number5nproblemas }} , "#b87333"],
        ["Sexta vez ", {{ $number6nproblemas }} , "#b87333"]
      ]);
      var viewproblemas = new google.visualization.DataView(dataproblemas);
      viewproblemas.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var optionsproblemas = {
        title: "Reporte de Problemas de Salud en niños",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chartproblemas = new google.visualization.ColumnChart(document.getElementById("problemas"));

google.visualization.events.addListener(chartproblemas, 'ready', function () {
  var content = '<img src="' + chartproblemas.getImageURI() + '">';
  $('#graph-imagesproblemasnino').append(content);
});

      chartproblemas.draw(viewproblemas, optionsproblemas);
       $('#link25').removeClass('active'); 
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="problemas" style="width: 500px; height: 300px;"></div>
                                       <div id="graph-imagesproblemasnino" style='display:none'></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>