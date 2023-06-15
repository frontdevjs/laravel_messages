<?php


use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'home'])->name('home');
Route::get('/about', [ContactController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact.allData');
Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact.showOneMessage');
Route::get('/contact/all/{id}/update', [ContactController::class, 'update'])->name('contact.update');
Route::get('/contact/all/{id}/delete', [ContactController::class, 'delete'])->name('contact.delete');
Route::post('/contact/all/{id}/updateSubmit', [ContactController::class, 'updateSubmit'])->name('contact.updateSubmit');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
