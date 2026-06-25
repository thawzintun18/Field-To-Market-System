<?php

use App\Http\Controllers\Authentication\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'authentication'] , function(){

    Route::get('driectPage' , [AuthController::class , 'driectPage'])->name('authentication#driectPage');

});
