<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtworkController;


Route::resource('/artworks', ArtworkController::class);


