<?php


Route::get('/listausuarios', 'UsuarioController@listaUsuarios')->name('ListaUsuarios');

Route::get('/home', 'HomeController@home')->name('homepage');

Route::get('/logar', 'HomeController@logar')->name('login');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
