<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsCntroller;
use App\Http\Controllers\HomePageSettings;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Config;

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
})->name('homepage');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminsCntroller::class, 'index'])->name('dashboard.index');;


    //Home PAGE SETTINGS
    Route::get('/home-page-settings', [HomePageSettings::class, 'index'])->name('dashboard.home_page_settings');
    Route::post('/home-page-settings', [HomePageSettings::class, 'changeSetting'])->name('dashboard.home_page_settings_change');


    //User Management index
    Route::get('/admin/users',[UserController::class, 'index'])->name('user_managment.index');


    //Projects Managements

    Route::get('/admin/projects',[ProjectController::class, 'index'])->name('projects.index');








});

Route::get('/home', [HomeController::class, 'index'])->name('home');


