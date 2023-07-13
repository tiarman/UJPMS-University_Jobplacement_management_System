<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/graduates', function (Request $request) {
    return [
      decrypt('eyJpdiI6IlVISUExWi9NdVFyYW16S2dZTTljNlE9PSIsInZhbHVlIjoibWtGUmhHeGhBL3FsdzlTUGZwRHB4bWFZQ1oweEZNMmptWGErK2xXenhlOURhYXJrZ0h1MFE3b2lNR3I4dFEyMSIsIm1hYyI6ImRmMTViZmUzMTEwOTMzYTI1M2MxNzJiMGFiNTMxMDUyYTViZDhlODcwMmM2Y2U0OTRlMzgyNjE3MTQyNGUwOGIiLCJ0YWciOiIifQ=='),
      [
        'name' => "Admin",
        'email' => "admin@gmail.com",
        'phone' => "01712345600",
      ]
    ];
});
