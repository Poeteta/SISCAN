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
                                                   
                                                    <tr>
                                                        <td>Tuberculosis <small>(BCG)</small></td>
                                                        <td>{{$tbc->idcount}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hepatitis B</td>
                                                        <td>{{$hepatitis->idcount}}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Pentavalente</td>
                                                        <td>{{$pentalvente->idcount}}</td>
                                                   
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Polio</td>
                                                        <td>{{$polio->idcount}}</td>
                                                
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Rotavirus</td>
                                                        <td>{{$rotavirus->idcount}}</td>
                                                        
                                                     
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Neumococo</td>
                                                        <td>{{$neumococo->idcount}}</td>
                                                        
                                                   
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>SPR <small>(Saranpión, Parotiditis, Rubéola)</small> </td>
                                                        <td>{{$spr->idcount}}</td>
                                                        
                                                   
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>DPT</td>
                                                        <td>{{$dpt->idcount}}</td>
                                                        
                                                   
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Amarílica</td>
                                                        <td>{{$amarilica->idcount}}</td>
                                                        
                                                   
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Influenza</td>
                                                        <td>{{$influenza->idcount}}</td>
                                                        
                                                   
                                                       
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
                                    <h5 class="card-category">Vacunas</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data3 = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Tuberculosis (BCG)", {{$tbc->idcount}}, "#b87333"],
        ["Hepatitis B", {{$hepatitis->idcount}}, "#b87333"],
        ["Pentavalente", {{$pentalvente->idcount}}, "#b87333"],
        ["Polio", {{$polio->idcount}}, "#b87333"],
        ["Rotavirus", {{$rotavirus->idcount}}, "#b87333"],
        ["Neumococo",{{$neumococo->idcount}}, "#b87333"],
        ["SPR", {{$spr->idcount}}, "#b87333"],
        ["DPT", {{$dpt->idcount}}, "#b87333"],
        ["Amarílica", {{$amarilica->idcount}}, "#b87333"],
        ["Influenza", {{$influenza->idcount}}, "#b87333"]
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