<?php

use App\Http\Controllers\Farmer\CropController;
use App\Http\Controllers\Farmer\FarmerController;
use App\Http\Controllers\Farmer\FarmerCropController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'farmer'], function () {

    Route::get('farmerDashboard', [FarmerController::class, 'farmerDashboard'])->name('farmer#dashboard');

    Route::group(['prefix' => 'field'], function () {
        Route::get('directPage', [FarmerCropController::class, 'directPage'])->name('farmer#directPage');
        Route::post('create', [FarmerCropController::class, 'create'])->name('farmer#create');
        Route::get('list', [FarmerCropController::class, 'list'])->name('farmer#list');
        Route::get('delete/{id}', [FarmerCropController::class, 'delete'])->name('farmer#delete');
        Route::get('edit/{id}', [FarmerCropController::class, 'edit'])->name('farmer#edit');
        Route::post('update/{id}', [FarmerCropController::class, 'update'])->name('farmer#update');
        Route::get('detail/{id}' , [FarmerCropController::class , 'detail'])->name('farmer#detail');
    });
    Route::group(['prefix' => 'crop'], function () {
        // Route::get('list', [CropController::class, 'list'])->name('farmer#list');
        Route::get('create', [CropController::class, 'create'])->name('farmer#addCrop');
        Route::post('creation', [CropController::class, 'creation'])->name('farmer#createCrop');
        Route::get('edit/{id}', [CropController::class, 'edit'])->name('farmer#editCrop');
        Route::post('edition', [CropController::class, 'edition'])->name('farmer#editionCrop');
        Route::delete('delete/{id}', [CropController::class, 'deleteCrop'])->name('farmer#deleteCrop');
    Route::get('farmerDashboard' , [FarmerController::class , 'farmerDashboard'])->name('farmer#dashboard');
    });

});
