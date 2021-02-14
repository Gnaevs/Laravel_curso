<?php

//Romeo.com = Route::get('/',function)

//Romeo.com/contacto = Route::get('contacto',function)


//-------------------------------rutas---------------------------------------------------------------------
// Route::get('/',function(){
//     return "Hola desde la pagina de inicio";
// });

// Route::get('saludo/{nombre?}',function($nombre = "Invitado"){
//     return "Saludos " . $nombre;
// });

// Route::get('saludo/{nombre}',function($nombre){  //te pide 
//     return "Saludos " . $nombre;
// });


//---------------------Rutas con nombre(Named routes)------------------------------------------------------


// Route::get('Contactame', function(){
//     return "Seccion de contactos";
// })->name('contactos');

// Route::get('/',function(){
//     echo "<a href='" . route('contactos') . "'> Contactos 1</a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 2</a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 3</a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 4</a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 5</a><br>";
// });


//---------------------------------Vistas-----------------------------------------------------------------------

// Route::get('/',function(){
//     $nombre = "Romeo";
//     return view('home')->with(['nombre' => $nombre]);//esta es una funcion de laravel queapunta a la carpeta view
// })->name('home');                       //with hace que los parametros esten disponibles en la 
                                        //Que se esta apuntando
                                        // tambien se puede pasar en forma de arreglo
                                        // ['nombre' => $nombre] dentro del parametro
                                        // Tambien se puede suar la funcion compact de esta forma separando el string dentro del view con una coma 
                                        // view('home',compact('nombre'));


//Tambien se puede generar una vista de la forma




Route::view('/', 'home')->name('home'); //es preferible hacerlo asi para paginas de poca informacion como: politicas de privacidad
                            //O que contengan solo texto

//Tambien podemos agregar valores por ejemplo, poniendo un array en los parametros de la vista

//Route::view('/','home', ['nombre' => 'Romeo']);

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
//Route::get('portfolio', 'PorfolioController'); //Aqui se esta llamando al controlador en lugar de la vista la vista se llama desde el controlador
Route::get('/portfolio',[\App\Http\Controllers\PorfolioController::class, 'index'])->name('portfolio');

//---------------------------Blade--------------------------------------------------------------------
//Blade es un motor de plantillas que trae incluido laravel
//para usarlo solo debemos usar la extension blade en las vistas
//por ejemplo home.blade.php



