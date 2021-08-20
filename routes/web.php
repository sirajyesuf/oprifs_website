<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/read_more/{id}', [PostController::class, 'show'])->name('readmore');
Route::get('/stories', [PostController::class, 'stories'])->name('stories');
Route::get('/galley', [GalleryController::class, 'index'])->name('gallery');
Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs');
Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');
Route::post('/send_message', [ContactUsController::class, 'sendMessage'])->name('message');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
