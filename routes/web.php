<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use \GuzzleHttp\Client;

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $client = new Client();
    $response = $client->get('http://localhost:5005/api/condovid');
    $body = $response->getBody()->getContents();
    $data = json_decode($body);

    return view('dashboard', compact('data'));
})->name('dashboard');


Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');
