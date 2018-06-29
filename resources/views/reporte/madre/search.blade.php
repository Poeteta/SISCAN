{!! Form::open(array('url'=>'reporte/madre','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

 
      <div class="row"  style="background: rgba(0,0,0,0.7);">
      <div class="container-fluid">
        <!-- INICIO SELECT   -->
        
<div class="col-lg-12">
  <div class="col-lg-4">
    <label for="selectperiodotipo" class="text-white">Seleccionar periodo de programa</label>
    <select name="fecha" style="background: rgb(255,255,255);" class="form-control"  id="selectperiodotipo">
      <option disabled>Seleccionar periodo</option>
      @foreach($periodo_programa as $pepro)
      <option  value="{{$pepro->idPeriodo_Programa}}">{{$pepro->Fecha_Inicio}}</option>
      @endforeach
    </select>


   
  </div> 
 <div class="col-lg-4 col-md-offset-2">

     <button type="submit" class="btn btn-primary">Buscar</button>




</div>

</div>



</div>

                        <!-- FIN SELECT  -->
  </div>

{{Form::close()}}




