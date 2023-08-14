<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Index;
use App\Http\Livewire\Bottles\UpdateBottle;

use App\Http\Livewire\Bottles\AddBottle;
use App\Http\Livewire\Bottles\ManyBottles;

use App\Http\Livewire\Cellars\AddCellar;
use App\Http\Livewire\Cellars\SingleCellar;
use App\Http\Livewire\Cellars\ManyCellars;

use App\Http\Controllers\CustomAuthController;
use App\Http\Livewire\Bottles\BottleAdvancedForm;
use App\Http\Livewire\Search\SearchAdvancedResults;


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

/** routes fonctionnelles 29/07 */
Route::get('/', function () {
    return view('auth.welcome');
});

Route::post('register', [CustomAuthController::class, 'store']);
Route::get('register', [CustomAuthController::class, 'create'])->name('register');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'authentication']);
Route::middleware('auth')->group(function (){ 

Route::get('/index', Index::class)->name('index');

Route::get('/bottles', ManyBottles::class)->name('bottles');
Route::get('/bottle', BottleAdvancedForm::class)->name('bottle-advanced-form');
Route::get('/add-bottle', AddBottle::class)->name('add-bottle');

Route::get('/cellars', ManyCellars::class)->name('cellars');
Route::get('/add-cellar', AddCellar::class)->name('add-cellar');

Route::get('/singleCellar/{cellar_id}',SingleCellar::class)->name('singleCellar');

Route::get('/update_bottle/{cellar_id}/{bottle_id}', UpdateBottle::class)->name('update_bottle');
Route::get('/search', SearchAdvancedResults::class)->name('search-advanced-results');
});