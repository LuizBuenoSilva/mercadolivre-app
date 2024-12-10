<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('login-mercadolivre', function () {
    $clientId = env('ML_CLIENT_ID');
    $redirectUri = env('ML_REDIRECT_URI');
    $url = "https://auth.mercadolivre.com.br/authorization?response_type=code&client_id=$clientId&redirect_uri=$redirectUri";
    return redirect($url);
});

Route::get('callback', function (Request $request) {
    $code = $request->query('code');
    $clientId = env('ML_CLIENT_ID');
    $clientSecret = env('ML_CLIENT_SECRET');
    $redirectUri = env('ML_REDIRECT_URI');

    $response = Http::asForm()->post('https://api.mercadolibre.com/oauth/token', [
        'grant_type' => 'authorization_code',
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'code' => $code,
        'redirect_uri' => $redirectUri,
    ]);

    $tokenData = $response->json();
    session(['access_token' => $tokenData['access_token']]);
    return redirect()->route('products.create');
});

Route::resource('products', ProductController::class);
