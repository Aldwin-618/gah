<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return redirect('https://sam.globe.com.ph/broadband');

});

Route::get('/samsung', function () {

    return view('samsung');

});
