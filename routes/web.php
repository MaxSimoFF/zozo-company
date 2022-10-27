<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        Route::get('/home', function () {
            return view('home');
        })->name('admin');

        Route::post('/', [ContactController::class, 'store'])->name('contacts.store');
    }
);

Route::group([
    'prefix' => '/admin',
    'as' => 'backend.',
    'middleware' => ['auth', 'role:Admin']
], function () {

    Route::get('/', [BackendController::class, 'index'])->name('index');
    Route::get('contacts', [\App\Http\Controllers\Backend\ContactController::class, 'index'])->name('contacts.index');

    Route::group([
        'prefix' => 'members',
        'as' => 'members.'
    ], function(){
        Route::get('/', [\App\Http\Controllers\Backend\MembersController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Backend\MembersController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\Backend\MembersController::class, 'store'])->name('store');
        Route::delete('/{member}', [\App\Http\Controllers\Backend\MembersController::class, 'destroy'])->name('destroy');
    });
});
