<?php

use Illuminate\Support\Facades\Route;
use App\Models\DataUserModel;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['title' => 'test' ,'data' => DataUserModel::all()]);
});
