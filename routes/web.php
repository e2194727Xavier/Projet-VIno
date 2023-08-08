<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Index;
use App\Http\Controllers\SAQController;
use App\Http\Livewire\Bottles\UpdateBottle;

use App\Http\Controllers\BottleController;
use App\Http\Livewire\Bottles\AddBottle;
use App\Http\Livewire\Bottles\SingleBottle;
use App\Http\Livewire\Bottles\ManyBottles;

use App\Http\Controllers\CellarController;
use App\Http\Livewire\Cellars\AddCellar;
use App\Http\Livewire\Cellars\SingleCellar;
use App\Http\Livewire\Cellars\ManyCellars;

use App\Http\Controllers\CustomAuthController;
use App\Http\Livewire\Search\BottleAdvancedForm;
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

Route::get('/index', Index::class)->name('index');

Route::get('/bottles', ManyBottles::class)->name('bottles');

Route::get('/cellars', ManyCellars::class)->name('cellars');

/** route non fonctionnelle */
Route::get('/wishlist', AddBottle::class)->name('wishlist');








    

// Ancienne route du projet avant les vacances 

/////////////////////// Farzad ///////
//Route::get('bottles',ManyBottles::class)->name('bottles');
// Route::get('/bottles/{bottle_id}', SingleBottle::class);
// Route::get('/cellars', ManyCellars::class)->name('cellars');
// Route::get('/bottle', BottleAdvancedForm::class)->name('bottle-advanced-form');
// Route::get('/search', SearchAdvancedResults::class)->name('search-advanced-results');
/////////////////////// Fin Farzad ///////

/////////////////////// Camille ///////

// Route::get('add-bottle', AddBottle::class)->name('add-bottle');
// Route::get('wishlist', AddBottle::class)->name('wishlist');
/////////////////////// Fin Camille ///////

/////////////////////// Safoora //////////////////

// Route::get('update',[SaqController::class,'updateSAQ']);
////////////////////////////////////////////////////////////////////////////////////////

//  Route::get('bottles',ManyBottles::class)->name('bottles');
// Route::get('/bottles/{bottle_id}', SingleBottle::class);

// Route::get('/add-cellar', AddCellar::class)->name('add-cellar');
// Route::post('/add-cellar', [AddCellar::class, 'store'])->name('add-cellar.store');

// Route::post('/add-cellar', [AddCellar::class, 'store']);


// Route::get('/update_bottle/{cellar_id}/{bottle_id}', UpdateBottle::class)->name('update_bottle');
// Route::get('/ajouter-cellier', AjouterCellier::class)->name('ajouter_cellier');

//////////////////////////////////////////////////////////////////////////////////////
//we have to delete these routes (just for guide)
// Route::get('cellar',[CellarController::class,'index']);
// Route::get('cellar',[CellarController::class,'store']);

// Route::post('addNewBottle',[BottleController::class,'addNewBottle']);
// Route::post('drinkBottleFromCellar',[BottleController::class,'drinkBottleFromCellar']);
// Route::post('addBottleToCellar',[BottleController::class,'addBottleToCellar']);
// Route::get('searchBottle',[BottleController::class,'searchBottle']);

/////////////////////// Fin Safoora ///////

/////////////////////// Xavier ///////
// Route::get('/singleCellar/{cellar_id}',SingleCellar::class)->name('singleCellar');
// }); 
