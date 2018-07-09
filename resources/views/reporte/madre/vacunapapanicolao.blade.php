       
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h5 class="title">Vacuna Papanicolao antes del programa</h5>
                                        </div>
                                        <div class="card-body">
                        
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <table id="tablaantespapa" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Vacuna Papanicolao antes del programa</th>
                                                        <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                                     
                                                        <tr>
                                                        <td>Si hicieron</td>
                                                        <td>{{ $Papanicolau_Antes_pg1->idcount}}</td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No hicieron</td>
                                                        <td>{{ $Papanicolau_Antes_pg0->idcount }}</td>
                                                        
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>

<br>
<div class="card-header">
                                            <h5 class="title">Vacuna Papanicolao despues del programa</h5>
                                        </div>

                                           <table id="tabladespuespapa" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Vacuna Papanicolao despues del programa</th>
                                                        <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                                     
                                                        <tr>
                                                        <td>Si hicieron</td>
                                                        <td>{{ $Papanicolau_resul1->idcount}}</td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No hicieron</td>
                                                        <td>{{ $Papanicolau_resul0->idcount }}</td>
                                                        
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
                                    <h5 class="card-category">Vacuna papanicolao</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var datavacunapapa = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Antes que si hicieran el programa", {{ $Papanicolau_Antes_pg1->idcount}} , "#4285f4"],
        ["Antes que no hicieran el programa",{{ $Papanicolau_Antes_pg0->idcount }}, "#db4437"],
        ["Despues que si hicieran el programa", {{ $Papanicolau_resul1->idcount}}, "#4285f4"],
        ["Despues que no hicieran el programa", {{ $Papanicolau_resul0->idcount }} , "#db4437"]
      ]);
      var viewvacunapapa = new google.visualization.DataView(datavacunapapa);
      viewvacunapapa.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var optionsvacunapapa = {
        title: "Reporte de Vacuna papanicolao",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chartvacunapapa = new google.visualization.ColumnChart(document.getElementById("viewvacunapapa"));

      google.visualization.events.addListener(chartvacunapapa, 'ready', function () {
  var content = '<img src="' + chartvacunapapa.getImageURI() + '">';
  $('#graph-imagespapani').append(content);
});
      chartvacunapapa.draw(viewvacunapapa, optionsvacunapapa);
       $('#link10').removeClass('active'); 
  } 
</script>
@endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="viewvacunapapa" style="width: 500px; height: 300px;"></div>
                                     <div id="graph-imagespapani" style='display:none'></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>