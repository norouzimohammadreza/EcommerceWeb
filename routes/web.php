<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('panel')->group(function (){
    Route::get('/',[PanelController::class,'index']);
    Route::prefix('category')->group(function (){
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
        Route::get('create',[CategoryController::class,'create'])->name('category.create');
        Route::post('create',[CategoryController::class,'store'])->name('category.store');
    });
    Route::prefix('product')->group(function (){
        Route::get('/',[ProductController::class,'index'])->name('product.index');
        Route::get('create',[ProductController::class,'create'])->name('product.create');
        Route::post('create',[ProductController::class,'store'])->name('product.store');
        Route::delete('/{product}',[ProductController::class,'destroy'])->name('product.delete');
    });

});
