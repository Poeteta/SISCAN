       
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Control Nutricional</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="tablacontrolnino" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Niveles de Control Nutricional</th>
                                                        <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                          <?php $number1ncontrolnutricional = 0; ?>
                          <?php $number2ncontrolnutricional = 0; ?>
                          <?php $number3ncontrolnutricional = 0; ?>
                          <?php $number4ncontrolnutricional = 0; ?>
                          <?php $number5ncontrolnutricional = 0; ?>
                          <?php $number6ncontrolnutricional = 0; ?>
                          @foreach($control_nutricional as $cn)

                          @if($cn->user_count == 1)
                          <?php $number1ncontrolnutricional++ ?>  
                          @elseif($cn->user_count == 2)
                          <?php $number2ncontrolnutricional++ ?>
                          @elseif($cn->user_count == 3)
                          <?php $number3ncontrolnutricional++ ?>
                          @elseif($cn->user_count == 4)
                          <?php $number4ncontrolnutricional++ ?>
                          @elseif($cn->user_count == 5)
                          <?php $number5ncontrolnutricional++ ?>
                          @elseif($cn->user_count == 6)
                          <?php $number6ncontrolnutricional++ ?>
                          @endif
 

                          @endforeach                  
                                                        <tr>
                                                        <td>Primera vez</td>
                                                        <td>{{ $number1ncontrolnutricional }}</td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Segunda vez</td>
                                                        <td>{{ $number2ncontrolnutricional }}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Tercera vez</td>
                                                        <td>{{ $number3ncontrolnutricional }}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Cuarta vez</td>
                                                        <td>{{ $number4ncontrolnutricional }}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Quinta vez</td>
                                                        <td>{{ $number5ncontrolnutricional }}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Sexta vez</td>
                                                        <td>{{ $number6ncontrolnutricional }}</td>
                                                        
                                                   
                                                       
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
                                    <h5 class="card-category">Control Nutricional</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var datacontrolnutricional = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Primera vez", {{ $number1ncontrolnutricional }} , "#b87333"],
        ["Segunda vez",{{ $number2ncontrolnutricional }}, "#b87333"],
        ["Tercera vez", {{ $number3ncontrolnutricional }}, "#b87333"],
        ["Cuarta vez", {{ $number4ncontrolnutricional }} , "#b87333"],
        ["Quinta vez ", {{ $number5ncontrolnutricional }} , "#b87333"],
        ["Sexta vez ", {{ $number6ncontrolnutricional }} , "#b87333"]
      ]);
      var viewcontrolnutricional = new google.visualization.DataView(datacontrolnutricional);
      viewcontrolnutricional.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var optionscontrolnutricional = {
        title: "Reporte de Control Nutricional en niños",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chartcontrolnutricional = new google.visualization.ColumnChart(document.getElementById("controlnutricional"));

google.visualization.events.addListener(chartcontrolnutricional, 'ready', function () {
  var content = '<img src="' + chartcontrolnutricional.getImageURI() + '">';
  $('#graph-imagescontrolnino').append(content);
});

      chartcontrolnutricional.draw(viewcontrolnutricional, optionscontrolnutricional);
       $('#link24').removeClass('active'); 
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="controlnutricional" style="width: 500px; height: 300px;"></div>
                                      <div id="graph-imagescontrolnino" style='display:none'></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>