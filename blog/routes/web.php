<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sport/list',[SportsController::class, 'index'])->name('spots.list');
Route::get('sport/create',[SportsController::class, 'create'])->name('sports.create');
Route::get('sport/show/{id}',[SportsController::class, 'show'])->name('spots.show');
Route::POST('sport/delete/{id}',[SportsController::class, 'destroy'])->name('spots.delete');
Route::get('sport/edit/{id}',[SportsController::class, 'edit'])->name('spots.edit');
Route::PUT('sport/update/{id}',[SportsController::class, 'update'])->name('spots.update');
Route::POST('sport/store',[SportsController::class, 'store'])->name('spots.store');


