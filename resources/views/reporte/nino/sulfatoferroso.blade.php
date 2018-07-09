       
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Sulfato Ferroso</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="tablasulfatonino" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Dosis de Sulfato Ferroso en Niños</th>
                                                        <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                          <?php $number1nsulfato = 0; ?>
                          <?php $number2nsulfato = 0; ?>
                          <?php $number3nsulfato = 0; ?>
                          <?php $number4nsulfato = 0; ?>
                          <?php $number5nsulfato = 0; ?>
                          <?php $number6nsulfato = 0; ?>
                          <?php $number7nsulfato = 0; ?>
                          <?php $number8nsulfato = 0; ?>
                          <?php $number9nsulfato = 0; ?>
                          <?php $number10nsulfato = 0; ?>
                          <?php $number11nsulfato = 0; ?>
                          <?php $number12nsulfato = 0; ?>
                          @foreach($sulfatoferroso as $sf)

                          @if($sf->Chequeo_idChequeo == 23)
                          <?php $number1nsulfato++ ?>  
                          @elseif($sf->Chequeo_idChequeo == 24)
                          <?php $number2nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 25)
                          <?php $number3nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 26)
                          <?php $number4nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 27)
                          <?php $number5nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 28)
                          <?php $number6nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 29)
                          <?php $number7nsulfato++ ?>  
                          @elseif($sf->Chequeo_idChequeo == 30)
                          <?php $number8nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 31)
                          <?php $number9nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 32)
                          <?php $number10nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 33)
                          <?php $number11nsulfato++ ?>
                          @elseif($sf->Chequeo_idChequeo == 34)
                          <?php $number12nsulfato++ ?>
                          @endif
 

                          @endforeach                  
                                                       
                                                        <tr>
                                                        <td>Dosis 1</td>
                                                        <td>{{ $number1nsulfato }}</td>  
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 2</td>
                                                        <td>{{ $number2nsulfato }}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 3</td>
                                                        <td>{{ $number3nsulfato }}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 4</td>
                                                        <td>{{ $number4nsulfato }}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 5</td>
                                                        <td>{{ $number5nsulfato }}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 6</td>
                                                        <td>{{ $number6nsulfato }}</td>
                                                        
                                                   
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 7</td>
                                                        <td>{{ $number1nsulfato }}</td>  
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 8</td>
                                                        <td>{{ $number2nsulfato }}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 9</td>
                                                        <td>{{ $number3nsulfato }}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 10</td>
                                                        <td>{{ $number4nsulfato }}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 11</td>
                                                        <td>{{ $number5nsulfato }}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 12</td>
                                                        <td>{{ $number6nsulfato }}</td>
                                                        
                                                   
                                                       
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
                                    <h5 class="card-category">Sulfato Ferroso</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var datasulfato = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Dosis 1", {{ $number1nsulfato }}, "#b87333"],
        ["Dosis 2", {{ $number2nsulfato }}, "#b87333"],
        ["Dosis 3", {{ $number3nsulfato }}, "#b87333"],
        ["Dosis 4",  {{ $number4nsulfato }}, "#b87333"],
        ["Dosis 5",  {{ $number5nsulfato }}, "#b87333"],
        ["Dosis 6", {{ $number6nsulfato }} , "#b87333"],
        ["Dosis 7", {{ $number7nsulfato }}, "#b87333"],
        ["Dosis 8",{{ $number8nsulfato }}, "#b87333"],
        ["Dosis 9",{{ $number9nsulfato }}, "#b87333"],
        ["Dosis 10",  {{ $number10nsulfato }}, "#b87333"],
        ["Dosis 11",  {{ $number11nsulfato }}, "#b87333"],
        ["Dosis 12", {{ $number12nsulfato }} , "#b87333"]
      ]);
      var viewsulfato = new google.visualization.DataView(datasulfato);
      viewsulfato.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var optionssulfato = {
        title: "Reporte de Sulfato Ferroso en niños",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chartsulfato = new google.visualization.ColumnChart(document.getElementById("sulfatoferroso"));

google.visualization.events.addListener(chartsulfato, 'ready', function () {
  var content = '<img src="' + chartsulfato.getImageURI() + '">';
  $('#graph-imagessulfatonino').append(content);
});

      chartsulfato.draw(viewsulfato, optionssulfato);
        $('#link23').removeClass('active'); 
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="sulfatoferroso" style="width: 500px; height: 300px;"></div>

                                      <div id="graph-imagessulfatonino" style='display:none'></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>