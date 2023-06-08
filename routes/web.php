<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Nyumbani;
use App\Http\Livewire\Tag;
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
    return view('layouts.guest');
});

Route::get('nyumbani', Nyumbani::class)->name('nyumbani');
Route::get('tags', Tag::class)->name('tags');

//livewire rout group
//Route::group(['prefix' => 'tags', 'as' => 'tags', function(){
//Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'tags'], function(){
//    Route::get('/', Tag::class)->name('tags');
//
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
