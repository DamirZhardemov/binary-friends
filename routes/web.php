<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;

Route::get('/', function(){
    return 'aaaaaaaaaaaaaaaaa';
});

Route::get('/my_name',[MyPlaceController::class,'my_name']);

Route::get('/my_page', [MyPlaceController::class,'index']);

Route::get('/my_age', [MyPlaceController::class,'my_age']);

Route::get('/my_sex', [MyPlaceController::class,'my_sex']);

Route::get('/my_city', [MyPlaceController::class,'my_city']);
