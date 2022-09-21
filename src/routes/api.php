<?php

use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Api\UserController;

use App\Http\Controllers\WantedImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// 認証済みでないと許可しない
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('tests', TestController::class);

Route::get('rank', [UserController::class, 'index']);
Route::get('detail/{id}', [UserController::class, 'show']);


// 認証前でもOK
Route::post("/login", [LoginController::class, "login"])->name('login');
Route::post("/logout", [LoginController::class, "logout"]);
Route::post("/register", [LoginController::class, "register"])->name('register');

Route::post('user/{id}/wanted', [WantedImageController::class, 'create'])->name('wanted.create');
Route::get('user/{id}/wanted', [WantedImageController::class, 'getImage'])->name('wanted.getImage');

Route::get('languages', [SkillController::class, 'getLanguages'])->name('languages');
Route::get('frameworks', [SkillController::class, 'getFrameworks'])->name('frameworks');
Route::get('databases', [SkillController::class, 'getDatabases'])->name('databases');
Route::get('services', [SkillController::class, 'getServices'])->name('services');
Route::get('user/{id}/languages', [SkillController::class, 'getUserLanguages'])->name('userLanguages');
Route::get('user/{id}/frameworks', [SkillController::class, 'getUserFrameworks'])->name('userFrameworks');
Route::get('user/{id}/databases', [SkillController::class, 'getUserDatabases'])->name('userDatabases');
Route::get('user/{id}/services', [SkillController::class, 'getUserServices'])->name('userServices');
