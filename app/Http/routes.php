<?php


Route::get('/',function () {
       return view('welcome');
});

Route::auth();




// Administrador


Route::group(['middleware' =>['auth','is_admin']], function (){



});


//JEFE

Route::group(['middleware' =>['auth','is_director']], function (){

/*MODULO DE TRABAJADORES --HANS--*/
Route::PATCH('seguridad/usuario/editPersona/{idUsuario}','UsuarioController@updatePersona'); 
Route::PATCH('seguridad/usuario/editUsuario/{idUsuario}','UsuarioController@updateUsuario');


// SE DEBE DEJAR EL RESOURCE AL FINAL O PUEDE OCURRIR UN ERROR AL NO ENCONTRAR EL METODO *MUY IMPORTANTE*

Route::resource('seguridad/usuario','UsuarioController');
Route::resource('seguridad/HistorialClinico','HistorialClinicoController');

/*MODULO DE REPORTE --HANS--  NO TOCAR*/  
Route::resource('reporte/general','ReporteController');
Route::resource('reporte/familiar','ReporteFamiliaController');
Route::resource('reporte/nino','ReporteNinosController');
Route::resource('reporte/madre','ReporteMadreController');

  });


// Operario


    Route::group(['middleware' =>['auth','is_operario']], function (){
    Route::PATCH('evaluacion/resultado/{idFamilia}','FamiliaController@show');
    Route::PATCH('evaluacion/generalinfon/{idMadre}','ninoController@show');
    Route::resource('/home', 'HomeController');
    Route::get('home', 'FamiliaController@show');

    Route::resource('evaluacion/resultado','FamiliaController');
    Route::resource('evaluacion/familia','evalController');
    Route::resource('Familia','NuevaFamiliaController');
    Route::resource('/Carnet-Familiar','CarnetFammiliarController');
    Route::resource('/Carnet-General','CarnetFammiliarController');
/* HEAD
=======
    
>>>>>>> 415a58e82799f00d43b6aad160a3bd9221e6829b*/

});


 /*PERMISOS PARA TODOS*/


/*MODULO DE EVALUACION --DIEGO - DEYVIS - PACHECO--*/
 Route::resource('/eva','evalController');
 Route::get('eva/{idFamilia}', 'evalController@show');
 Route::POST('eva/store','evalController@store');
 Route::POST('Familia/store','FamiliaController@store');
 Route::resource('seguridad/UserSafety','ProfileController');
 Route::PATCH('seguridad/UserSafety/editPass/','ProfileController@updatePassword');
 Route::PATCH('seguridad/usuario/editUser/{idPersona}','ProfileController@updatePeople');
 Route::resource('seguridad/UserSafety','ProfileController');
 Route::resource('Herramientas','toolsController');
 Route::resource('dhome','DHomeController');
Route::resource('/EvaluarF/EvaluarF','EvaluarFController');

 Route::resource('resumen','ResumenController');

Route::POST('seguridad/UserSafety/editPass/','ProfileController@updatePassword');
Route::PATCH('seguridad/usuario/editUser/{idPersona}','ProfileController@updatePeople');
Route::resource('seguridad/UserSafety','ProfileController');


 /*Route::resource('/ListarEvaluacion', 'EvaluacionController');*/
Route::resource('/Evaluar','EvaluarController');
  /*lsitar madre*/

Route::PATCH('evaluacion/madre/cpn/{idCPN}','MadreController@updatecpn');
Route::GET('evaluacion/madre/index/','MadreController@store');
Route::resource('evaluacion/madre','MadreController');

