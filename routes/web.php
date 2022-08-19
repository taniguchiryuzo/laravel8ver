<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HiLowController;
use App\Http\Controllers\PhotoController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello_world', fn () => view(view: 'hello_world'));
Route::get('/curriculum', fn () => view(view: 'curriculum'));
Route::get('/', fn () => view(view: 'index'));

// 世界の時間
Route::get('/world-time', [UtilityController::class,'worldtime']);

// おみくじ
Route::get('/omikuji', [GameController::class,'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class,'montyhall']);
// リクエスト
Route::get('/form', [RequestSampleController::class,'form']);
Route::get('/query-strings', [RequestSampleController::class,'querystrings']);
Route::get('/users/{id}', [RequestSampleController::class,'profile'])->name(name: 'profile');
Route::get('/products/{category}/{year}', [RequestSampleController::class,'productsArchive']);
Route::get('/route-Link', [RequestSampleController::class,'routeLink']);

// ログイン
Route::get('/login',[RequestSampleController::class, 'loginform']);
Route::post('/login',[RequestSampleController::class,'login'])->name(name:'login');

// イベント
Route::resource(name:'/events', controller:EventController::class)->only(['create','store']);

// ハイローゲーム
Route::get('/hi-low', [HiLowController::class, 'index'])->name('hi-low');
Route::post('/hi-low', [HiLowController::class, 'result']);

// ファイル管理
Route::resource('/photos',PhotoController::class)->only(['create','store','show']);