<div class="card-body">
    {!! Form::open(array('url'=>'evaluacion','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

    <div class="form-group">
        <div class="input-group">
           <input type="text" value="" class="form-control" placeholder="Buscar..." name="searchText">
                        <span class="input-group-addon"><i class="now-ui-icons ui-1_zoom-bold"></i>
                        </span>
        </div>
    </div>

    {{Form::close()}}
        
</div>