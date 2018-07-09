{!! Form::open(array('url'=>'reporte/nino','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

 
      <div class="row"  style="background: rgba(0,0,0,0.7);">
      <div class="container-fluid">
        <!-- INICIO SELECT   -->
        
<div class="col-lg-12">
  <div class="col-lg-4">
    <label for="selectperiodotipo" class="text-white">Seleccionar periodo de programa</label>
    <select name="fecha" style="background: rgb(255,255,255);" class="form-control"  id="selectperiodotipo">
      <option disabled>Seleccionar periodo</option>
      <option value="">Reporte de todos los programas</option>
      @foreach($periodo_programa as $pepro)
      <option  value="{{$pepro->idPeriodo_Programa}}">{{$pepro->Fecha_Inicio}} - {{$pepro->Fecha_Fin}}</option>
      @endforeach
    </select>

<script type="text/javascript">
  $("#selectperiodotipo").val($("#selectperiodotipo option:first").val());
</script>
   
  </div> 
 <div class="col-lg-4 col-md-offset-2">

     <button type="submit" class="btn btn-primary">Buscar</button>




</div>
@include('reporte.nino.exportar')
</div>



</div>

                        <!-- FIN SELECT  -->
  </div>

{{Form::close()}}




