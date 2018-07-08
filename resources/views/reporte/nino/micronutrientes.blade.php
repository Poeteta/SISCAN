       
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

                                                <tbody>
                          <?php $number1nmicro = 0; ?>
                          <?php $number2nmicro = 0; ?>
                          <?php $number3nmicro = 0; ?>
                          <?php $number4nmicro = 0; ?>
                          <?php $number5nmicro = 0; ?>
                          <?php $number6nmicro = 0; ?>
                          <?php $number7nmicro= 0; ?>
                          <?php $number8nmicro = 0; ?>
                          <?php $number9nmicro = 0; ?>
                          <?php $number10nmicro = 0; ?>
                          <?php $number11nmicro = 0; ?>
                          <?php $number12nmicro = 0; ?>
                          @foreach($sulfatoferroso as $sf)

                          @if($sf->Chequeo_idChequeo == 11)
                          <?php $number1nmicro++ ?>  
                          @elseif($sf->Chequeo_idChequeo == 12)
                          <?php $number2nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 13)
                          <?php $number3nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 14)
                          <?php $number4nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 15)
                          <?php $number5nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 16)
                          <?php $number6nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 17)
                          <?php $number7nmicro++ ?>  
                          @elseif($sf->Chequeo_idChequeo == 18)
                          <?php $number8nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 19)
                          <?php $number9nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 20)
                          <?php $number10nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 21)
                          <?php $number11nmicro++ ?>
                          @elseif($sf->Chequeo_idChequeo == 22)
                          <?php $number12nmicro++ ?>
                          @endif
 

                          @endforeach                  
                                                       
                                                        <tr>
                                                        <td>Dosis 1</td>
                                                        <td>{{ $number1nmicro }}</td>  
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 2</td>
                                                        <td>{{ $number2nmicro }}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 3</td>
                                                        <td>{{ $number3nmicro }}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 4</td>
                                                        <td>{{ $number4nmicro }}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 5</td>
                                                        <td>{{ $number5nmicro }}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 6</td>
                                                        <td>{{ $number6nmicro }}</td>
                                                        
                                                   
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 7</td>
                                                        <td>{{ $number1nmicro }}</td>  
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 8</td>
                                                        <td>{{ $number2nmicro }}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 9</td>
                                                        <td>{{ $number3nmicro }}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 10</td>
                                                        <td>{{ $number4nmicro }}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 11</td>
                                                        <td>{{ $number5nmicro }}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Dosis 12</td>
                                                        <td>{{ $number6nmicro }}</td>
                                                        
                                                   
                                                       
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
      var datamicro = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Dosis 1", {{ $number1nmicro }}, "#b87333"],
        ["Dosis 2", {{ $number2nmicro }}, "#b87333"],
        ["Dosis 3", {{ $number3nmicro }}, "#b87333"],
        ["Dosis 4",  {{ $number4nmicro }}, "#b87333"],
        ["Dosis 5",  {{ $number5nmicro }}, "#b87333"],
        ["Dosis 6", {{ $number6nmicro }} , "#b87333"],
        ["Dosis 7", {{ $number7nmicro }}, "#b87333"],
        ["Dosis 8",{{ $number8nmicro }}, "#b87333"],
        ["Dosis 9",{{ $number9nmicro }}, "#b87333"],
        ["Dosis 10",  {{ $number10nmicro }}, "#b87333"],
        ["Dosis 11",  {{ $number11nmicro }}, "#b87333"],
        ["Dosis 12", {{ $number12nmicro }} , "#b87333"]
      ]);
      var viewmicro = new google.visualization.DataView(datamicro);
      viewmicro.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var optionsmicro = {
        title: "Reporte de Asistencias",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chartmicro = new google.visualization.ColumnChart(document.getElementById("micro"));
      chartmicro.draw(viewmicro, optionsmicro);
        $('#link22').removeClass('active'); 
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="micro" style="width: 500px; height: 300px;"></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>