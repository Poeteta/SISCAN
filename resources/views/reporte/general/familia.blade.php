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
                                                         <th>Tipo de Familia</th>
                                                         <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    <tr>
                             <td>Nueva</td>
                             <td>{{$tipo_nueva->idtipnueva}}</td>
                             </tr>

                            <tr>
                             <td>Continuadora</td>
                             <td>{{$tipo_continuadora->idtipcon}}</td>
                            </tr>

                            <tr>
                            <td>Reingresante</td>
                             <td>{{$tipo_reingresante->idtipreing}}</td>
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
                                    <h5 class="card-category">Tipo de Familia</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                        @push('scripts')
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Reporte', 'Medio año'],
          ['Nueva',     {{$tipo_nueva->idtipnueva}}],
          ['Continuadora',     {{$tipo_continuadora->idtipcon}}],
          ['Reingresante',  {{$tipo_reingresante->idtipreing}}]
        ]);

        var options = {
          title: 'Tipo de Familia',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    @endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="donutchart" style="width: 500px; height: 300px;"></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>
                        <div class="row">
<div class="col-lg-12 col-md-12" style="background: rgba(0,0,0,0.5); width: 10px;height: 10px;">
</div>  
</div>
<br>

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
                                                         <th>Modo Captación</th>
                                                         <th>Cantidad</th>
                                                      
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                   <tr>
                             <td>Hospital</td>
                             <td>{{$modo_hospital->idfamhos}}</td>
                            </tr>

                            <tr>
                             <td>Campaña de salud</td>
                             <td>{{$modo_campana->idfamcam}}</td>
                            </tr>

                            <tr>
                            <td>Visita Domiciliaria</td>
                             <td>{{$modo_visita->idfamvisita}}</td>
                            </tr>

                            <tr>
                             <td>Otros</td>
                             <td>{{$modo_otros->idfamotros}}</td>
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
                                    <h5 class="card-category">Modo Captación</h5>
                                    <h4 class="card-title">Reporte gráfico</h4>
                             

                                       @push('scripts')
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Reporte', 'medio año'],
          ['Hospital', {{$modo_hospital->idfamhos}}],
          ['Campaña de salud',  {{$modo_campana->idfamcam}}],
          ['Visita Domiciliaria', {{$modo_visita->idfamvisita}}],
          ['Otros', {{$modo_otros->idfamotros}}]

        ]);

        var options = {
          title: 'Modo Captación'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);

      }
        
    </script>
     @endpush

                                  </div>
                                  <div class="card-body">
                                     <div id="piechart" style="width: 500px; height: 300px;"></div>
                                  </div>
                          
                                </div>
                              </div>
                        </div>