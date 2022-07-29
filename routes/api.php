<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->bearerToken();
    return $request->user();
});



Route::apiResource('words', WordController::class);



// hnVhlxJSzvyoKGSh9DRcDNnEZd1yWSdDx8GWRs6H


//  Dlv6azU81DgmPyb3ZBeCoXwPiBz7Dv4hPANiAVUI  <==


//
