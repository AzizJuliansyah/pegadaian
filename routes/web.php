<?php

use App\Http\Controllers\CetakController;
use App\Models\User;
use App\Http\Middleware\isTamu;
use App\Http\Controllers\Layout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\SessionController;


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

Route::get('/', [Layout::class, 'index']);

// Route::get('User', [UserController::class, 'index']);
// Route::get('User/{id}', [UserController::class, 'detail'])->where('id', '[0-9]+');

Route::resource('User', UserController::class);

Route::controller(Layout::class)->group(function () {
    Route::get('/layout/home', 'home');
    Route::get('/layout/index', 'index');
});

// Route::get('/user', [UserController::class, 'index']);

Route::resource('siswa', SiswaController::class)->middleware('isLogin');
Route::get('siswa/search', [SiswaController::class, 'search']);

Route::get('info', [CetakController::class, 'index']);
Route::get('info/{id}', [CetakController::class, 'detail'])->where('id', '[0-9]+');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

// Route::get('/info', function () {
//     return view('siswa/print'); 
// });

Route::get('/tes', function () {
    return view('tes/mm'); 
});


// Route::get('/user', function () {
//     $users = User::all();
//     return view('user/index'); 
// });

// Route::get('/qrcode', [QrCodeController::class, 'index']);

Route::controller(QrCodeController::class)->group(function () {
    Route::get('qrcode', 'index');
    Route::get('qrcode.download', 'download')->name('qrcode.download');
});

Route::get('/', function () {
    return view('sesi');
})->middleware('isLogin');
