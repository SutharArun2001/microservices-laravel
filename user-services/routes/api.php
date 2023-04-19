<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api_gateway')->group(function(){
    Route::get('student', [ServiceController::class, 'student']);
    Route::get('teacher', [ServiceController::class, 'teacher']);
});


Route::get('gate', function(){
    // $curl = curl_init();
    //  curl_setopt_array($curl, array(
    //     CURLOPT_URL => "https://fruityvice.com/api/fruit/all",// your preferred link
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => "",
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_TIMEOUT => 100,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => "GET",
    //     CURLOPT_HTTPHEADER => array(
    //         // Set Here Your Requesred Headers
    //         'Content-Type: application/json',
    //     ),
    // ));
    // $response = curl_exec($curl);

    // $err = curl_error($curl);
    // curl_close($curl);
    return config('gateways.student_gateway_api');

});
