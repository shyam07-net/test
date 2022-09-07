<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;



Route::get('/', function () {
    echo "hello working";
});
Route::get("create", [TestingController::class, "create"]);
