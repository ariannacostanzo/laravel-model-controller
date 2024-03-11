<?php

use Illuminate\Support\Facades\Route;
//includo nel file il controller
use App\Http\Controllers\HomeController;

//uso la funzione invoke del controller
Route::get('/', HomeController::class)->name('home');
