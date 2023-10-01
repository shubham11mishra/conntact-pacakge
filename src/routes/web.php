<?php

use Illuminate\Support\Facades\Route;
use ShubhamMishra\Contact\Http\Controllers\ContactController;

//Route::get('contact/{$id}', [ContactController::class,'index']);
//Route::get('/contact/{id}', function ($id){
//    return view('contact::contact',['id' => $id]);
//});
Route::group(['middleware' => ['web']], function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});
