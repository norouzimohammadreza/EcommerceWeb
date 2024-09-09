<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\CategoryController;
Route::get('/', function () {
    return 'd';
});
Route::prefix('panel')->group(function (){
    Route::get('/',[PanelController::class,'index']);
    Route::prefix('category')->group(function (){
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
        Route::get('create',[CategoryController::class,'create'])->name('category.create');
        Route::post('create',[CategoryController::class,'store'])->name('category.store');
    });

});
