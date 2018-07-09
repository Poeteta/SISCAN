<?php


Route::get('/',function () {
       return view('welcome');
});

Route::auth();

/*
 SE DEBE DEJAR EL RESOURCE AL FINAL O PUEDE OCURRIR UN ERROR AL NO ENCONTRAR EL METODO
                       !!!!!!!! MUY IMPORTANTE !!!!
 */

//DIRECTOR

/*MODULO DE REPORTE,TRABAJADORES --HANS--  NO TOCAR*/  
Route::group(['middleware' =>['auth','is_director']], function (){
Route::PATCH('seguridad/usuario/editPersona/{idUsuario}','UsuarioController@updatePersona'); 
Route::PATCH('seguridad/usuario/editUsuario/{idUsuario}','UsuarioController@updateUsuario');
Route::resource('seguridad/usuario','UsuarioController');


Route::resource('reporte/general','ReporteController');
Route::resource('reporte/nino','ReporteNinosController');
Route::resource('reporte/madre','ReporteMadreController');





  });

/*MODULO DE REPORTE,TRABAJADORES --HANS--  NO TOCAR*/  



    // Operario 
    Route::group(['middleware' =>['auth','is_operario']], function (){
    Route::get('home', 'FamiliaController@show');
    Route::resource('evaluacion/familia','evalController');
    Route::get("autocompletar",array('as'=>'autocompletar','uses'=> 'FamiliaController@autocompletar'));
  
});


 /*PERMISOS PARA TODOS*/

 Route::PATCH('seguridad/UserSafety/editPass/','ProfileController@updatePassword');
 Route::PATCH('seguridad/usuario/editUser/{idPersona}','ProfileController@updatePeople');
 Route::resource('seguridad/UserSafety','ProfileController');
 Route::POST('Familia/store','FamiliaController@store');
 Route::resource('/eva','evalController');
 Route::get('eva/{idFamilia}', 'evalController@show');
 Route::POST('eva/store','evalController@store');
 Route::POST('perfil/editPass/','PerfilController@updatePassword');
 Route::PATCH('perfil/editPersona/{idUsuario}','PerfilController@updatePersona');
 Route::resource('perfil','PerfilController');
