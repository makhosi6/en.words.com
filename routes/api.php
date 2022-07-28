<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     // return $request->bearerToken();
//     return $request->user();
// });
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', function (Request $request) {
        return $request->user();
    });

    Route::post('/words', function (Request $request) {
        if($request->user()->tokenCan('create')){
            return "CAN";
        }else{
            return "CAN'T";
        };
    });
    Route::post('/content', function (Request $request) {
        if($request->user()->tokenCan('create')){
            return "CAN";
        }else{
            return "CAN'T";
        };
    });
});





// hnVhlxJSzvyoKGSh9DRcDNnEZd1yWSdDx8GWRs6H


//  Dlv6azU81DgmPyb3ZBeCoXwPiBz7Dv4hPANiAVUI  <==


//
