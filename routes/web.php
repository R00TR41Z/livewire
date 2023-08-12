<?php

use App\Http\Livewire\ShowTweet;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/tweet",ShowTweet::class);  
