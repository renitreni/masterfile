<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\ApplicationFormLivewire;
use App\Http\Livewire\DashboardLivewire;
use App\Http\Livewire\ApplicationLivewire;
use App\Http\Livewire\OptionsLivewire;

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
    return redirect()->route('dashboards');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboards', DashboardLivewire::class)->name('dashboards');
    Route::get('/applications', ApplicationLivewire::class)->name('applications');
    Route::get('/application-form', ApplicationFormLivewire::class)->name('application-form');

    Route::get('/options', OptionsLivewire::class)->name('options');
});