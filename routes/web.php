<?php

use App\Http\Controllers\QRController\QRController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/',[QRController::class, 'index']);

Route::get('QR_Phone',[QRController::class,'QR_Phone'])->name('QR_Phone');
Route::post('/qr-builder-phone', [QrController::class, 'qr_builder_Phone'])->name('qr_builder_Phone');


Route::get('QR_Mail',[QRController::class,'QR_Mail'])->name('QR_Mail');
Route::post('/qr-builder-email', [QrController::class, 'qr_builder_Email'])->name('qr_builder_Email');


Route::get('Download_attachment/{filename}',
    [QRController::class,'Download_attachment'])->name('Download_attachment');
