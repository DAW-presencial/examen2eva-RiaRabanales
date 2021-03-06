<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//Route::get('/', [TutoresController::class, 'create']);
Route::redirect('/', '/tutores/create');

Route::resource('tutores', TutoresController::class);