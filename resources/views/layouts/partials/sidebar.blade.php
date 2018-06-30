<div class="sidebar" data-color="orange">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="logo-mini">
                    <img class="img" src="{{ asset('img/logo.png') }}"> 
                </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Hospital Huaycan
                </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
                        
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <i class="now-ui-icons business_badge"></i>
                    <span style="text-align: center;">
                        {{ Auth::user()->Nom_user}}
                        <b class="caret"></b>
                    </span>
                </a>
                
                <div class="collapse" id="collapseExample">

                    <ul class="nav">
                        <li>
                            <a href="{{url('/perfil')}}">
                                
                                <span class="sidebar-normal" style="text-align: center;">Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/logout')}}">
                                
                                <span class="sidebar-normal" style="text-align: center;">Cerrar Sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
          @if(auth()->User()->Rol_idRol == '2' )
        <ul class="nav">
          
            <li class="active">
                <a href="{{url('/home')}}">
                            <i class="now-ui-icons design-2_ruler-pencil"></i>
                            <p>Registrar Carnet</p>
                        </a>
            </li>
            <li>
                <a href="{{url('/evaluacion')}}">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Evaluación</p>
                        </a>
            
                        
            </li>
        </ul>
        @elseif(auth()->User()->Rol_idRol == '3' )
        <ul class="nav">
            <li>
                <a href="{{url('/seguridad/usuario/')}}">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Usuarios</p>
                        </a>
            </li>
            <li>
            <a data-toggle="collapse" href="#formsExamples" >
                      
                      <i class="now-ui-icons business_chart-pie-36"></i>
                    
                      <p>
                        Reportes <b class="caret"></b>
                      </p>
                  </a>

                  <div class="collapse " id="formsExamples">
                      <ul class="nav">
                      
                        <li >
                            <a href="{{url('/reporte/general/')}}">
                                <span class="sidebar-mini-icon">RG</span>
                                <span class="sidebar-normal"> Reporte General </span>
                            </a>
                        </li>

                      
                        <li >
                            <a href="{{url('/reporte/madre/')}}">
                                <span class="sidebar-mini-icon">V</span>
                                <span class="sidebar-normal"> Reporte Madres </span>
                            </a>
                        </li>
                      
                        <li >
                            <a href="{{url('/reporte/nino/')}}">
                                <span class="sidebar-mini-icon">W</span>
                                <span class="sidebar-normal"> Reporte Niños </span>
                            </a>
                        </li>
                      
                    </ul>
                </div>

            </li>

        </ul>
        @endif
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('ul li').click(function(){
  $(this).addClass('active');
  $(this).parent().children('li').not(this).removeClass('active');
});
</script>   
