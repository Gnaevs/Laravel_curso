<?php
Route::view('/', 'home')->name('home');
Route::view('/quienes-somos/{param?}', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');

//vista a la pagina principal de los projestos donde se listas estos
Route::get('/portafolio','ProjectController@index')->name('projects.index');
//Vista al formulario para crear un projecto 
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
//Vista al formulario para editae un projecto 
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//Direccion al Guardado de un projecto actualizado
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
//Direccion al Guardadi de un projecto Creado
Route::post('/portafolio','ProjectController@store')->name('projects.store');
//Vista de un projecto especifico
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//Borra un registro
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::post('/contacto', [\App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');