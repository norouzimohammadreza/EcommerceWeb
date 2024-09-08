<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;

Route::get('/', function () {
    return view('admin.index');
});
Route::prefix('/admin')->group(function (){
    Route::get('/',[PanelController::class,'index']);
});
