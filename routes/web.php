<?php
Route::view('/', 'home')->name('home');
Route::view('/quienes-somos/{param?}', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');

Route::get('/portafolio','ProjectController@index')->name('projects.index'); 
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portafolio','ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');

Route::post('/contacto', [\App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');