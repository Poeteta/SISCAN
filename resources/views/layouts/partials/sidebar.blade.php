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
                <a style="margin-left: 18%;" data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <i style="float: left;" class="now-ui-icons business_badge"></i>
                    <span style="padding-left: 20%;" class="sidebar-normal">{{ Auth::user()->Nom_user}}<b class="caret"></b></span>
                </a>
                
                <div class="collapse" id="collapseExample">

                    <ul class="nav">
                        <li>
                            <a style="padding-left: 15%;" href="{{url('/perfil')}}">
                                <i class="now-ui-icons users_single-02"></i>    
                                <span class="sidebar-normal">Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a style="padding-left: 15%;" href="{{url('/logout')}}">
                                <i class="now-ui-icons media-1_button-power"></i>
                                <span class="sidebar-normal">Cerrar Sesión</span>
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
                <a href="{{url('/eva')}}">
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
                <a href="{{url('/periodo/')}}">
                            <i class="now-ui-icons gestures_tap-01"></i>
                            <p>Periodos</p>
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
                      <ul class="nav" style="margin-left: 5%;">
                      
                        <li >
                            <a href="{{url('/reporte/general/')}}">
                                <i class="now-ui-icons education_paper"></i>
                                <span class="sidebar-normal"> Reporte General </span>
                            </a>
                        </li>

                      
                        <li >
                            <a href="{{url('/reporte/madre/')}}">
                                <i class="now-ui-icons files_paper"></i>
                                <span class="sidebar-normal"> Reporte Madres </span>
                            </a>
                        </li>
                      
                        <li >
                            <a href="{{url('/reporte/nino/')}}">
                                <i class="now-ui-icons files_single-copy-04"></i>
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
