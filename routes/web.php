<?php

use App\Support\Route;
use Slim\Exception\NotFoundException;


Route::get('/', 'WelcomeController@index');
Route::get('/welcome/{name}/{id}', 'WelcomeController@show');





Route::get('/gui', 'PessoasController@guilherme');