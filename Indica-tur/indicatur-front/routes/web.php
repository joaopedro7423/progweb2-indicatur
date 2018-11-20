<?php


Route::get('/listausuarios', 'UsuarioController@listaUsuarios')->name('ListaUsuarios');


Route::get('/home', 'HomeController@home')->name('homepage');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
