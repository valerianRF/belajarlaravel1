<?php

use App\Http\Controllers\court_typesController;
use App\Http\Controllers\courtsController;
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

Route::get('/home', function() {
    return ('home');
});

route::get('/profile', function()  {
    return view('profile');
});

route::get('/profile/{$id}', function($id)  {
    return 'hallo'.$id;
});

Route::get('/admin', function() {
    return view('MasterProject');
});

Route::get('/mp', function() {
    return view('mp');
});

Route::get('/ms', function() {
    return view('ms');
});

Route::get('/homee', function() {
    return view('homee');
});

Route::get('/court_types', [court_typesController::class, 'index']);
Route::post('/court_types', [court_typesController::class, 'store']);

Route::resource('court', courtsController::class);

?>