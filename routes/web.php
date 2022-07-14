<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('home');
});
Route::get('services/acrilicos', function () {
    return view('services.acrilicos');
});
Route::get('services/comunicacao_externa', function () {
    return view('services.comunicacao_externa');
});

Route::get('services/comunicacao_interna', function () {
    return view('services.comunicacao_interna');
});

Route::get('services/envelopamento', function () {
    return view('services.envelopamento');
});

Route::get('services/impressos', function () {
    return view('services.impressos');
});

Route::get('services/personalizados', function () {
    return view('services.personalizados');
});

Route::post('/send-message',[ContactController::class, 'sendEmail'])->name('contact.send'); 


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
