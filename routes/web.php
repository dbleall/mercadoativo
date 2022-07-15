<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Client;
use App\Portfolio;
use App\Service;
use App\Acrilico;
use App\Interna;
use App\Comunicaoexterna;
use App\Envelopamento;
use App\Personalizado;
use App\Impresso;



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
    $clients = Client::all();
    $services = Service::all();
    $portfolios = Portfolio::all();
    return view('home', compact('clients', 'services', 'portfolios'));
});


Route::get('services/acrilicos', function () {
    $acrilicos = Acrilico::all();
    return view('services.acrilicos', compact('acrilicos'));
});

Route::get('services/comunicacao_interna', function () {
    $comunicacaointernas = Interna::all();
    return view('services.comunicacao_interna', compact('comunicacaointernas'));
});


Route::get('services/comunicacao_externa', function () {
    $comunicacaoexternas = Comunicaoexterna::all();
    return view('services.comunicacao_externa', compact('comunicacaoexternas'));
});


Route::get('services/envelopamento', function () {
    $envelopamentos = Envelopamento::all();
    return view('services.envelopamento', compact('envelopamentos'));
});

Route::get('services/impressos', function () {
    $impressos = Impresso::all();
    return view('services.impressos', compact('impressos'));
});

Route::get('services/personalizados', function () {
    $personalizados = Personalizado::all();
    return view('services.personalizados', compact('personalizados'));
});

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
