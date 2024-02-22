<?php
use Illuminate\Support\Facades\Route;
use magdawdd\slug\Http\Controllers\SlugController;
Route::get('/slug-generate',  [SlugController::class,'index']);
