{!! Form::open(array('url'=>'seguridad/usuario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="input-group mb-3">
   
<div class="input-group mb-3">
 <input type="text" class="form-control border-input" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
  <div class="input-group-append">
    <button type="submit" class="btn btn-primary">Buscar</button>
  </div>
</div>
 
</div>
{{Form::close()}}