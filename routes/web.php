<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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

Route::get('profile', function () {
    return view('welcome');
});


Route::get('pdf', [UserController::class, 'printPdf']);

Route::get('/', [UserController::class, 'getContacts']);

Route::get('profile/{id}/show', [UserController::class, 'viewContacts']);

Route::post('save', [UserController::class, 'store']);
