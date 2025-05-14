<?php
use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('app'); // dùng view chứa React root
})->where('any', '.*');
