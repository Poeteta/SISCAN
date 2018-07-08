<div class="row" id="content">
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
<div id="editor"></div>




                                            <table id="tablafamilia" class="table table-striped table-bordered" cellspacing="0" width="100%">
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

  var btnSave = document.getElementById('save-pdf');

  google.visualization.events.addListener(chart, 'ready', function () {
    btnSave.disabled = false;
  });
   
//  doc.text(20 para IZQUIERDA A DERECHA, 20 PARA ARRIBA Y ABAJO, 'Hello world!');
  btnSave.addEventListener('click', function () {
    
    var doc = new jsPDF();
    doc.addImage(imgData2, 'PNG', 20, 5, 30, 10);
    doc.addImage(imgData, 'PNG', 160, 5, 35, 10);
    doc.setFontSize(8);
    doc.setTextColor(100);
    doc.text(55, 10, 'DOCUMENTO TECNICO: REPORTE DE FAMILIAS - HOSPITAL DE HUAYCAN');
    doc.setFontSize(11);
    doc.setTextColor(0);
    doc.text(90, 20, 'REPORTE GENERAL');
    doc.text(20, 40, 'El hospital de Huaycán haciendo uso del "Programa Nacional para la reducción de la desnutrición');
    doc.text(20, 45, 'crónica infantil y la prevención de la anemia en el país", en su establecimiento, en el periodo de')
    doc.text(20, 50, '3/7/2018 hasta él 3/7/2018 ha obtenido los resultados plasmados en este documento.');
    
    doc.text(20, 80, 'Tipo de familia         Cantidad'); 
    doc.text(20, 90, 'Nueva                          {{$tipo_nueva->idtipnueva}}'); 
    doc.text(20, 95, 'Continuadora               {{$tipo_continuadora->idtipcon}}'); 
    doc.text(20, 100, 'Reingresante               {{$tipo_reingresante->idtipreing}}'); 
    doc.addImage(chart.getImageURI(), 80, 60);

    doc.save('ReporteGeneral.pdf');
  }, false);
   
        chart.draw(data, options);
      }
    </script>
    @endpush

                                  </div>
                                  <div class="card-body">
                                     <input id="save-pdf" type="button" value="Exportar en PDF" disabled />
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
                                            <table id="tablamodocaptacion" class="table table-striped table-bordered" cellspacing="0" width="100%">
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