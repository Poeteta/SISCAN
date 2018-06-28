<div class="card-body">
    {!! Form::open(array('url'=>'evaluacion/familia','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

    <div class="form-group">
        <div class="input-group">
        <input type="text" class="form-control border-input" name="searchText" placeholder="Buscar..." value="">
        <button type="submit" class="btn btn-primary">
             <i class="now-ui-icons ui-1_zoom-bold"></i>
        </button>
        </div>
    </div>

    {{Form::close()}}
        
</div>