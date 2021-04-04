<?php
Route::view('/', 'home')->name('home');
Route::view('/quienes-somos/{param?}', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');

Route::resource('portafolio', 'ProjectController')
    ->names('projects')
    ->parameters(['portafolio' => 'project'])
    ;

Route::post('/contacto', [\App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');    

Auth::routes();
