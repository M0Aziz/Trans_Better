<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoyenController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImageTController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/contact', [App\Http\Controllers\ContactFrontController::class,'create'])->name('contact.create');

Route::post('/contact', [App\Http\Controllers\ContactFrontController::class,'store'])->name('contact.store');
/*Route::get('/contact', function () {
    return view('front.contact');
});*/
Route::get('admin', [App\Http\Controllers\AdminController::class, 'back'])
    ->middleware(['auth', 'verified'])
    ->name('admin');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::get('/categorie', function () {
    return view('back.Categorie');
})->name('categorie');
//Route::get('admin', [App\Http\Controllers\AdminController::class, 'back'])->name('admin');
Route::get('/', [App\Http\Controllers\AdminController::class, 'front'])->name('home');

Route::get('/test', function () {
    return view('front.test');
});
//Route::get('categories/{categorie}', [App\Http\Controllers\CategorieController::class,'show'])->name('categories.show')->middleware('can:viewAdmin');

Route::get('categories/{categorie}', [App\Http\Controllers\CategorieController::class,'show'])->name('categories.show')->middleware(['auth', 'admin']);
Route::post('categories/{categorie}', [App\Http\Controllers\CategorieController::class,'destroy'])->name('categories.destroy')->middleware(['auth', 'admin']);

//Route::resource('categories', App\Http\Controllers\CategorieController::class);
Route::get('/categories_create', [App\Http\Controllers\CategorieController::class, 'create'])->name('categories.create')->middleware(['auth', 'admin']);
Route::post('/categories', [App\Http\Controllers\CategorieController::class, 'store'])->name('categories.store')->middleware(['verify_souscategorie','admin']);

Route::get('/categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('categories.index')->middleware(['auth', 'admin']);


Route::get('/categories/{categorie}/edit', [App\Http\Controllers\CategorieController::class, 'edit'])->name('categories.edit')->middleware(['auth', 'admin']);
Route::put('/categories/{categorie}', [App\Http\Controllers\CategorieController::class, 'update'])->name('categories.update')->middleware(['verify_souscategorie','admin']);;

Route::resource('sous_categories', App\Http\Controllers\SousCategorieController::class)->middleware(['auth', 'admin']);
Route::resource("/moyenTransport", MoyenController::class)->middleware(['auth', 'admin']);

Route::resource("/imageMoyen", ImageController::class)->middleware(['auth', 'admin']);
Route::resource('contacts', App\Http\Controllers\ContactController::class);

Route::get('/commandes', [App\Http\Controllers\CommandeController::class, 'index'])->name('commande.index');
Route::get('commandes/{commande}', [App\Http\Controllers\CommandeController::class,'show'])->name('commande.show');
Route::post('commandes/{commande}', [App\Http\Controllers\CommandeController::class,'destroy'])->name('commande.destroy');

//Route::resource('categories', App\Http\Controllers\CategorieController::class);
Route::get('/commande_create', [App\Http\Controllers\CommandeController::class, 'create'])->name('commande.create');
Route::post('/commandes_store', [App\Http\Controllers\CommandeController::class, 'store'])->name('commande.store');


Route::get('/commandes/{commande}/edit', [App\Http\Controllers\CommandeController::class, 'edit'])->name('commande.edit');
Route::put('/commandes/{commande}', [App\Http\Controllers\CommandeController::class, 'update'])->name('commande.update');
Route::get('/panier', [App\Http\Controllers\CommandeController::class, 'panier'])->name('commande.panier');
Route::post('/commandes_storeticket', [App\Http\Controllers\CommandeController::class, 'storewithTicket'])->name('commande.storewithTicket');


Route::resource('tickets', App\Http\Controllers\TicketsController::class);



Route::get('/images/create', [ImageTController::class, 'create'])->name('images.create');
Route::post('/images', [ImageTController::class, 'store'])->name('images.store');
Route::get('/images/{id}', [ImageTController::class, 'show'])->name('images.show');
Route::get('/images/{id}/edit', [ImageTController::class, 'edit'])->name('images.edit');
Route::put('/images/{id}', [ImageTController::class, 'update'])->name('images.update');
Route::delete('/images/{id}', [ImageTController::class, 'destroy'])->name('images.destroy');
Route::get('/images', [ImageTController::class, 'index'])->name('images.index');
require __DIR__.'/auth.php';
