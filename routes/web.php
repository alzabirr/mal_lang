<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [siteController::class, 'homepage']);
Route::get("/documentation",[siteController::class, 'documentationPage']);
