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
                             <td>Alimentación y nutrición</td>
                             <td>{{$asisalimentacion->idcontSeAli}}</td>
                            </tr>

                            <tr>
                             <td>Salud sexual y reproductiva</td>
                             <td>{{$asissexrepro->idcontSesexpro}}</td>
                            </tr>

                            <tr>
                             <td>Higiene y ambiente</td>
                             <td>{{$asishigiambi->idcontSehigiambi}}</td>
                            </tr>

                            <tr>
                             <td>Habilidades para la vida</td>
                             <td>{{$asishabivida->idcontSehabivida}}</td>
                            </tr>

                            <tr>
                             <td>Seguridad Vial</td>
                             <td>{{$asissegvial->idcontSesegvial}}</td>
                            </tr>

                            <tr>
                             <td>Salud mental</td>
                             <td>{{$asissalmen->idcontSesalmen}}</td>
                            </tr>

                            <tr>
                             <td>TBC</td>
                             <td>{{$asisTBC->idcontSesTBC}}</td>
                            </tr>

                            <tr>
                             <td>Dengue/ Chikungunya</td>
                             <td>{{$asisdengue->idcontSesdengue}}</td>
                            </tr>

                            <tr>
                             <td>Actividad física</td>
                             <td>{{$asisactifisi->idcontSesactifisi}}</td>
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
                                    <h5 class="card-category">Asistencias</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                      @push('scripts')
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data3 = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["Alimentación y nutrición", {{$asisalimentacion->idcontSeAli}}, "#b87333"],
        ["Salud sexual y reproductiva", {{$asissexrepro->idcontSesexpro}}, "silver"],
        ["Higiene y ambiente", {{$asishigiambi->idcontSehigiambi}}, "gold"],
        ["Habilidades para la vida", {{$asishabivida->idcontSehabivida}}, "color: #e5e4e2"],
        ["Seguridad Vial", {{$asissegvial->idcontSesegvial}}, "#b87333"],
        ["Salud mental", {{$asissalmen->idcontSesalmen}}, "stroke-color: #703593; stroke-width: 4; fill-color: #C5A5CF"],
        ["TBC", {{$asisTBC->idcontSesTBC}}, "color: gray"],
        ["Dengue/ Chikungunya", {{$asisdengue->idcontSesdengue}}, "#76A7FA"],
        ["Actividad física", {{$asisactifisi->idcontSesactifisi}}, "gold"]
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
      $('#link9').removeClass('active');
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