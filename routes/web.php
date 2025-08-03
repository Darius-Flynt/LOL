<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'main']);
Route::get('/cadastrar', [Controller::class, 'cadastrar']);
Route::get('/login', [Controller::class, 'fazerLogin']);
Route::get('/ping', [Controller::class, 'ping']);
Route::get('/home', [Controller::class, 'home']);
Route::get('/main', [Controller::class, 'main']);
Route::get('/ajuda', [Controller::class, 'ajuda']);
Route::get('/register', [Controller::class, 'register']);

