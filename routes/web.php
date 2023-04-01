<?php

use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\GalleryController;
use App\http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TabelCollectionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/collection', [CollectionController::class, 'collection']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/gallery' , [GalleryController::class, 'gallery']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/', [AdminIndexController::class, 'index']);
Route::get('/dashboard', [AdminIndexController::class, 'index']);
Route::get('/admincollection',[TabelCollectionController::class, 'tabel']);
Route::get('/admingallery', [AdminGalleryController::class, 'admingallery']);
Route::get('/login',[LoginController::class, 'login']);