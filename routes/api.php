<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
    return response()->json(['greeting' => 'Hello World!']);
});