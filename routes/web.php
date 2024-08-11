<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('crud.index');
});

Route::get('/', [CrudController::class, 'index'])->name('crud.index');
Route::post('/', [CrudController::class, 'store'])->name('crud.store');
Route::put('/{id}', [CrudController::class, 'update'])->name('crud.edit');
Route::delete('/{id}', [CrudController::class, 'delete'])->name('crud.delete');
