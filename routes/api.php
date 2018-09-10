<?php

use Illuminate\Http\Request;

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


Route::post('user', function(Request $request) {
    $request->validate([
        'age' =>[
            'required',
            new \App\Rules\seniorCitizen(),
            ]
    ]);
   return response('Success', 200);
});