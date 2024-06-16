<?php

use App\Http\Controllers\AboutusController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('aboutus', function () {
//     return view('aboutus');
// });

Route::get('aboutus',[AboutusController::class, 'index']);
Route::get('posts/list',[AboutusController::class, 'postList']);

