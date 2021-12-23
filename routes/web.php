<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::post('/user-data',[UserInfoController::class,'storeuser'])->name('add-user');
Route::get('/edit-data/{id}',[UserInfoController::class,'SelectUserEditDAta']);
Route::get('/delete-data/{id}',[UserInfoController::class,'delete'])->name('delete');
Route::post('update',[UserInfoController::class,'updateUserData'])->name('update-userData');
Route::get('/view-data/{id}',[UserInfoController::class,'viewDetails'])->name('view');
require __DIR__.'/auth.php';
