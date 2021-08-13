<?php
use App\Http\Controllers\SubController;
use App\Http\Controllers\RegistrasiAcaraCont;
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

Route::get('/', function () {
    return view('layout.raw2');
});
Route::get('/fetchpp/{id}',[SubController::class, 'fetchpp']);
Route::get('/fetch/{id}',[SubController::class, 'fetch']);
Route::get('/fetch2/{id}',[SubController::class, 'fetch2']);
Route::get('/fetch3/{id}',[SubController::class, 'fetch3']);
Route::get('/fetch4/{id}',[SubController::class, 'fetch4']);
Route::get('/fetch5/{id}',[SubController::class, 'fetch5']);
Route::get('/fetch6/{id}',[SubController::class, 'fetch6']);
Route::get('/fetch7/{id}',[SubController::class, 'fetch7']);
Route::get('/fetch8/{id}',[SubController::class, 'fetch8']);

Route::get('/form-kehadiran/{slug_acara}',[RegistrasiAcaraCont::class,'index'])->name('regis');
Route::get('/tes',[RegistrasiAcaraCont::class,'tes'])->name('tes');

Route::post('/submit-registrasi',[RegistrasiAcaraCont::class,'store'])->name('submit.registrasi');
