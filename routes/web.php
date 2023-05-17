<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/menu', [\App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{restauran}', [\App\Http\Controllers\MenuController::class, 'show'])->name('menu.show');
Route::get('/menu/{restauran}/order', [\App\Http\Controllers\MenuController::class, 'order'])->name('menu.order');
Route::get('/recipe', [\App\Http\Controllers\RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/{recipe}', [\App\Http\Controllers\RecipeController::class, 'show'])->name('recipe.show');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'index'])->name('contact.index');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'index'])->name('about.index');
Route::get('/favorite', [\App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite.index');
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/profile/info', [\App\Http\Controllers\ProfileController::class, 'info'])->name('profile.info');
Route::post('/profile/info/save', [\App\Http\Controllers\ProfileController::class, 'info_update'])->name('profile.info.data');
Route::get('/profile/cards', [\App\Http\Controllers\ProfileController::class, 'cards'])->name('profile.cards');
Route::post('/profile/cards/add', [\App\Http\Controllers\ProfileController::class, 'cards_add'])->name('profile.cards.add');
Route::get('/profile/orders', [\App\Http\Controllers\ProfileController::class, 'orders'])->name('profile.orders');
Route::get('/profile/favorite', [\App\Http\Controllers\ProfileController::class, 'favorite'])->name('profile.favorite');
Route::post('/profile/favorite/{menu}', [\App\Http\Controllers\ProfileController::class, 'favorite_add'])->name('profile.favorite.add');
Route::post('/profile/unfavorite/{menu}', [\App\Http\Controllers\ProfileController::class, 'favorite_delete'])->name('profile.favorite.delete');


Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Post\InactiveController::class)->name('index');
    Route::get('/posts', \App\Http\Controllers\Admin\Post\IndexController::class)->name('posts');
    Route::get('/posts/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('posts.show');
    Route::post('/posts/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('posts.update');
    Route::post('/posts', \App\Http\Controllers\Admin\Post\StoreController::class)->name('posts.store');
    Route::delete('/posts/{post}', \App\Http\Controllers\Admin\Post\DeleteController::class)->name('posts.delete');
    Route::get('/users', \App\Http\Controllers\Admin\User\IndexController::class)->name('users');
    Route::post('/users', \App\Http\Controllers\Admin\User\StoreController::class)->name('users.store');
    Route::delete('/users/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('users.delete');
    Route::get('/quotes', \App\Http\Controllers\Admin\Quote\IndexController::class)->name('quotes');
    Route::post('/quotes', \App\Http\Controllers\Admin\Quote\StoreController::class)->name('quotes.store');
    Route::delete('/quotes/{quote}', \App\Http\Controllers\Admin\Quote\DeleteController::class)->name('quotes.delete');
    Route::get('/ads', \App\Http\Controllers\Admin\Ad\IndexController::class)->name('ad');
    Route::post('/ads', \App\Http\Controllers\Admin\Ad\StoreController::class)->name('ad.store');
    Route::delete('/ads/{ad}', \App\Http\Controllers\Admin\Ad\DeleteController::class)->name('ad.delete');
    Route::get('/quotes', \App\Http\Controllers\Admin\Quote\IndexController::class)->name('quote');
    Route::post('/quotes', \App\Http\Controllers\Admin\Quote\StoreController::class)->name('quote.store');
    Route::delete('/quotes/{quote}', \App\Http\Controllers\Admin\Quote\DeleteController::class)->name('quote.delete');
    Route::get('/categories', \App\Http\Controllers\Admin\Category\IndexController::class)->name('category');
    Route::post('/categories', \App\Http\Controllers\Admin\Category\StoreController::class)->name('category.store');
    Route::delete('/categories/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('category.delete');
    Route::get('/deleted', \App\Http\Controllers\Admin\Deleted\IndexController::class)->name('deleted');
    Route::post('/deleted/{delete}', \App\Http\Controllers\Admin\Deleted\UpdateController::class)->name('deleted.update');
});
