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
    $validator = $request->validate([
        'age' => [
            'required',
            function($attribute, $value, $fail) {
                if($value < 60) {
                    $fail($attribute.' must be 60 or above');
                }
            }
        ],
    ]);
    print_r($request->all());
    if($validator->fails()) {
        return response()->json($validator->messages(), 422);

    }

    return response()->json([], 200);
});