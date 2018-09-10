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
        'age' => [
            'required',
            function($attribute, $value, $fail) {
                if($value < 60) {
                    $fail($attribute.' must be 60 or above');
                }
            }
        ],
    ]);
   return response('Success', 200);
});